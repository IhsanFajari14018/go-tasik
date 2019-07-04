
import java.io.BufferedReader;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.HashMap;
import java.util.List;
import java.util.StringTokenizer;

/**
 *
 * @author SAN
 */
public class AprioriAlgorithm {

    /**
     * list untuk menyimpan semua data survei.
     */
    private List<int[]> dataSurvei;

    /**
     * list untuk menyimpan kumpulan kandidat hasil generate.
     */
    private List<int[]> itemSets;

    /**
     * the list of item along with valid recomendation upper minimum confidence
     * list yang menyimpan data rekomendasi.
     */
    private List<int[]> recommendationList;

    /**
     * list untuk menyimpan data kandidat terakhir dari hasil generate yang
     * memenuhi diatas minimum support.
     */
    private List<int[]> finalItemSet;

    /**
     * panjang maksimum dari suatu kumpulan data.
     */
    private int itemSetsLength;

    /**
     * variabel untuk menyimpan nama file data survei.
     */
    private String surveiFileName;

    /**
     * banyaknya jumlah item yang berbeda dalam data survei.
     */
    private int nItemBerbeda;

    /**
     * total data survei.
     */
    private int nDataSurvei;

    /**
     * nilai minimum support untuk menentukan presentasi frekuensi kemunculan
     * itemset
     */
    private double minSupport;

    /**
     * nilai minimum untuk menentukan data rekomendasi mana yang valid bisa
     * dipakai.
     */
    private double minConfidence;

    /**
     * Method untuk mengisi nilai minimum support
     *
     * @param n double
     */
    public void setMinSup(double n) {
        this.minSupport = n;
    }

    /**
     * Method untuk mengisi nilai minimum confidence
     *
     * @param n double
     */
    public void setMinConf(double n) {
        this.minConfidence = n;
    }

    /**
     * Method untuk mengisikan nama beserta alamat file data survei.
     *
     * @param file String
     */
    public void setData(String file) {
        this.surveiFileName = file;
    }

    /**
     * Method untuk mempersiapkan variabel-variable pada program dan melakukan
     * proses penghitungan. Dilanjut dengan memanggil method start untuk memulai
     * simulasi.
     *
     * @throws java.lang.Exception
     */
    public void inisialisasi() throws Exception {
        this.dataSurvei = new ArrayList();
        this.finalItemSet = new ArrayList();
        this.recommendationList = new ArrayList();

        this.itemSetsLength = 0;
        this.nItemBerbeda = 0;
        this.nDataSurvei = 0;

        // baca file untuk memulai perhitungan
        BufferedReader textFile = new BufferedReader(new FileReader(this.surveiFileName));
        while (textFile.ready()) {
            this.nDataSurvei++;

            String str = textFile.readLine();
            //pecah kalimat menjadi kata per kata, dalam kasus ini list survei menjadi per pariwisata
            StringTokenizer kata = new StringTokenizer(str, " ");
            while (kata.hasMoreTokens()) {
                //data survei berdasarkan no ID pariwisata
                int id_par = Integer.parseInt(kata.nextToken());
                if (id_par + 1 > this.nItemBerbeda) {
                    this.nItemBerbeda = id_par + 1;
                }
            }
        }

        //set semua transaksi dalam file ke list, jika tidak nanti akan error null pointer exc
        this.fileToList();

        start();
        this.setFinalItemSet();
        this.confidence();

        System.out.println("");
        System.out.println("FINAL RESULT:");
        System.out.println(getRecommendationForPrint());
    }

    /**
     * Method untuk mencatat itemset terakhir yang nantinya akan digunakan untuk
     * data rekomendasi.
     */
    private void setFinalItemSet() {
        // set dulu highest length of itemset di pas generateItemSet
        // setelah sudah diset, find itemSet yg memiliki highest length
        // searching dari belakang biar lebih cepat & efektif 
        System.out.println("");
        System.out.println("Final itemset size: " + this.finalItemSet.size());

        for (int i = this.finalItemSet.size() - 1; i >= 0; i--) {
            int[] data = this.finalItemSet.get(i);
            for (int j = 0; j < data.length; j++) {
                if (data.length == this.itemSetsLength) {
                    System.out.print(data[j] + " ");
                } else {
                    // akhiri loop tidak penting ini karena sisanya dibawah nilai itemSetsLength
                    break;
                }
            }
            if (data.length != this.itemSetsLength) {
                //hapus itemset dari list
                this.finalItemSet.remove(i);
            } else {
                System.out.println("");
            }
        }
        System.out.println("");
    }

    /**
     * Method untuk menyimpan data survei yang terekomendasi.
     *
     * @param item
     * @param itemSet
     */
    private void setRecommendationList(int item, int[] itemSet) {
        int[] recList = new int[itemSet.length];
        int idx = 0;
        recList[idx] = item;
        idx++;
        for (int i = 0; i < itemSet.length; i++) {
            //kalau nilainya sama seperti item, maka tak perlu dimasukan ke array recList
            if (itemSet[i] != item) {
                recList[idx] = itemSet[i];
                idx++;
            }
        }
        this.recommendationList.add(recList);
    }

    /**
     * Method untuk memulai keseluruhan proses dari algoritma apriori.
     */
    private void start() throws Exception {
        // generate kandidat yang berukuran satu
        // hanya dipakai sekali dan pertama
        createFirstItemset();

        // item yang digenerate direpresentasikan dalam integer mulai dari 1
        int numItemset = 1;

        // Kalau itemsetnya sudah tidak ada yang bisa lagi di proses (jika diproses juga
        // hasilnya dibawah dari minimum, maka berhenti.
        while (itemSets.size() > 0) {
            countFrequentItemset();
            if (!itemSets.isEmpty()) {
                createNextItemset();
            }
            numItemset++;
        }
    }

    /**
     * Method untuk generate itemset (kumpulan survei) yang berukuran satu item.
     */
    private void createFirstItemset() {
        itemSets = new ArrayList<>();
        for (int i = 0; i < nItemBerbeda; i++) {
            int[] cand = {i};
            itemSets.add(cand);
        }
    }

    /**
     * Method untuk membuat kandidat itemset dari itemset sebelumnya.
     */
    private void createNextItemset() {
        // variabel untuk mematok panjang itemset selanjutnya yang akan dibuat
        int currentSizeOfItemsets = itemSets.get(0).length;

        // Menyimpan kandidat sementara
        HashMap<String, int[]> tempKandidat = new HashMap<>();

        // bandingkan pada setiap pasang itemset
        for (int i = 0; i < itemSets.size(); i++) {
            for (int j = i + 1; j < itemSets.size(); j++) {
                int[] arr1 = itemSets.get(i);
                int[] arr2 = itemSets.get(j);

                // buat kandidat dgn mengcopy
                int[] newCand = new int[currentSizeOfItemsets + 1];
                System.arraycopy(arr1, 0, newCand, 0, newCand.length - 1);

                int nilaiBerbeda = 0;
                for (int k = 0; k < arr2.length; k++) {
                    boolean isExist = false;

                    // loop, apakah nilai arr2 ada dalam arr1
                    for (int l = 0; l < arr1.length; l++) {
                        if (arr1[l] == arr2[k]) {
                            isExist = true;
                            break;
                        }
                    }

                    if (!isExist) {
                        nilaiBerbeda++;
                        // simpan yang tidak exist di kandidat bagian akhir
                        newCand[newCand.length - 1] = arr2[k];
                    }

                }

                if (nilaiBerbeda == 1) {
                    Arrays.sort(newCand);
                    tempKandidat.put(Arrays.toString(newCand), newCand);
                }
            }
        }

        //set itemsets baru
        this.itemSets = new ArrayList<>(tempKandidat.values());
    }

    /**
     * Method untuk menghitung frekuensi kemunculan itemset dan menghapus
     * itemset yang nilainya dibawah minimum support.
     */
    private void countFrequentItemset() throws Exception {

        List<int[]> tempKandidat = new ArrayList<>();

        // untuk mencatat apakah ada kesamaan
        boolean isSame;
        // banyaknya itemset yang sama
        int nSameItemset[] = new int[this.itemSets.size()];

        BufferedReader textFile = new BufferedReader(new InputStreamReader(new FileInputStream(this.surveiFileName)));

        boolean[] survei = new boolean[this.nItemBerbeda];

        for (int i = 0; i < this.nDataSurvei; i++) {

            String str = textFile.readLine();
            surveiInDataSurvei(str, survei);

            // cek pada seluruh kandidat
            for (int j = 0; j < this.itemSets.size(); j++) {
                isSame = true;
                int[] cand = this.itemSets.get(j);

                // loop untuk periksa untuk setiap masing-masing survei apakah 
                // ada dalam seluruh data survei.
                // sudah dibuat dengan for biasa, tapi malah jadi bug, 
                // harus pakai foreach.               
                for (int gate : cand) {
                    if (survei[gate] == false) {
                        isSame = false;
                        break;
                    }
                }

                // tambah jumlah banyaknya data survei tersebut yang telah ditemukan dalam seluruh data survei
                if (isSame) {
                    nSameItemset[j]++;
                }
            }
        }

        //loop untuk hapus itemset yang dibawah minimum support
        for (int i = 0; i < this.itemSets.size(); i++) {

            // jika hasil persentase count lebih besar dari minimum support,
            // maka tambahkan kandidat tsb ke frequent item / kandidat
            if ((nSameItemset[i] / (double) (this.nDataSurvei)) >= this.minSupport) {
                printKandidat(itemSets.get(i), nSameItemset[i]);
                tempKandidat.add(itemSets.get(i));

                //masukan ke finalItemSet untuk difilter nantinya berdasarkan max length itemSet
                this.finalItemSet.add(this.itemSets.get(i));

                //update length
                int length = itemSets.get(i).length;
                if (length > this.itemSetsLength) {
                    this.itemSetsLength = length;
                }
            }
        }

        //diisi dengan kandidat baru hasil generate barusan
        this.itemSets = tempKandidat;

        //akhiri penggunaan membaca dari file
        textFile.close();
    }

    /**
     * Method untuk menandai bahwa bener ada tidaknya suatu item survei dalam
     * itemset survei.
     */
    private void surveiInDataSurvei(String line, boolean[] survei) {
        StringTokenizer kata = new StringTokenizer(line, " ");

        // di-set false seakan nilai default-nya = false
        Arrays.fill(survei, false);
        // catat jika ada suatu survei dalam itemset survei tersebut
        while (kata.hasMoreTokens()) {
            int parsedVal = Integer.parseInt(kata.nextToken());
            survei[parsedVal] = true;
        }
    }

    /**
     * Method untuk melihat nilai confidence dari masing-masing data survei
     * final yang diatas nilai batas minimum support.
     */
    private void confidence() throws FileNotFoundException, IOException {
        int[] item = new int[1];
        int[] itemSet = new int[20];

        for (int i = 0; i < this.finalItemSet.size(); i++) {
            itemSet = this.finalItemSet.get(i);
            for (int j = 0; j < itemSet.length; j++) {
                item[0] = itemSet[j];

                int nItemSet = this.countItemOrItemSet(itemSet);
                int nItem = this.countItemOrItemSet(item);
                double confidence = this.countConfidence(nItemSet, nItem);
                System.out.printf(i + "." + j + " | " + "Confidence: " + "%.2f", confidence);

                if (confidence >= this.minConfidence) {
                    System.out.println(" | " + item[0] + " - " + Arrays.toString(itemSet));
                    this.setRecommendationList(item[0], itemSet);
                }
                System.out.println("\n");
            }
        }
    }

    /**
     * Method untuk menghitung nilai confidence yang dimiliki sebuah data
     * survei.
     *
     * @param nItemSet
     * @param nItem
     * @return
     */
    private double countConfidence(double nItemSet, double nItem) {
        System.out.println(nItemSet + " : " + nItem);
        return nItemSet / nItem;
    }

    /**
     * Method ini dipakai untuk menentukan nilai pembagi bagi perhitungan
     * confidence.
     *
     * @param toFind adalah sebuah list transaksi yang disimpan dalam array.
     * Kemudian akan digunakan untuk pencarian didalam seluruh transaksi yang
     * ada.
     * @return jumlah item atau itemset
     * @throws FileNotFoundException
     * @throws IOException
     */
    private int countItemOrItemSet(int[] toFind) throws FileNotFoundException, IOException {
        int ctr = 0;
        boolean existance = false;

        //loop untuk mencari pada semua transaksi
        //pencarian ini dilakukan dalam bentuk data array 2D
        for (int i = 0; i < this.dataSurvei.size(); i++) {
            for (int j = 0; j < toFind.length; j++) {
                existance = this.isExist(this.dataSurvei.get(i), toFind, j);
                if (!existance) {
                    break;
                }
            }
            if (existance) {
                ctr++;
            }
        }

        System.out.println("Counter: " + ctr);
        return ctr;
    }

    /**
     * Method ini untuk melakukan pencarian
     *
     * @param arr adalah sebuah transaksi
     * @param toFind adalah item yang sedang ingin dicari pada sebuah transaksi
     * @param idx adalah sebagai pointer pada array toFind
     * @return
     */
    private boolean isExist(int[] arr, int[] toFind, int idx) {
        for (int i = 0; i < arr.length; i++) {
            //kalau ada maka next angka yg di-search
            //ini juga mencegah duplikat
            if (toFind[idx] == arr[i]) {
                return true;
            }
        }
        return false;
    }

    /**
     * Method untuk mememindahkan data survei dalam file pada list.
     *
     * @throws FileNotFoundException
     * @throws IOException
     */
    private void fileToList() throws FileNotFoundException, IOException {
        // load the transaction file
        BufferedReader data_in = new BufferedReader(new InputStreamReader(new FileInputStream(surveiFileName)));

        for (int i = 0; i < this.nDataSurvei; i++) {

            // boolean[] trans = extractEncoding1(data_in.readLine());
            String line = data_in.readLine();
            //System.out.print(i + ". " + line + " | ");

            String[] parts = line.split(" ");
            int[] n1 = new int[parts.length];
            for (int n = 0; n < parts.length; n++) {
                if (!"".equals(parts[n]) || !parts[n].isEmpty()) {
                    n1[n] = Integer.parseInt(parts[n]);
                }
            }

            this.dataSurvei.add(n1);
        }
    }

    /**
     * Method untuk menampilkan seluruh data survei.
     */
    private void printValue() {
        System.out.println("Print list of transaction:");
        for (int i = 0; i < this.dataSurvei.size(); i++) {
            int[] data = this.dataSurvei.get(i);
            for (int j = 0; j < data.length; j++) {
                System.out.print(data[j] + " ");
            }
            System.out.println("");
        }
    }

    /**
     * Method untuk mendapatkan data survei yang direkomendasikan.
     *
     * @return String of recommendation
     */
    public String getRecommendationForPrint() {
        String res = new String();
        if (this.recommendationList.size() > 0) {
            for (int i = 0; i < this.recommendationList.size(); i++) {
                int[] data = this.recommendationList.get(i);
                if (data.length <= 1) {
                    return "Data rekomendasi terlalu sedikit.";
                }
                for (int j = 0; j < data.length; j++) {
                    if (j == 0) {
                        res += data[j] + " -> ";
                    } else {
                        res += data[j] + " ";
                    }

                }
                res += "\n";
            }
            return res;
        } else {
            return "Tidak menghasilkan rekomendasi.";
        }

    }

    /**
     * Method untuk mendapatkan data list rekomendasi pariwisata.
     *
     *
     * @return
     */
    public List getRecommendationList() {
        return this.recommendationList;
    }

    /**
     * Method untuk menampilkan data kandidat hasil generate yang nilai
     * kemunculannya diatas minimum support. Method ini menampilkan juga banyak
     * datanya dalam dataset survei.
     */
    private void printKandidat(int[] kandidat, int nSupport) throws IOException {
        System.out.println(Arrays.toString(kandidat) + "  (" + ((nSupport / (double) this.nDataSurvei)) + " " + nSupport + ")");
    }

}
