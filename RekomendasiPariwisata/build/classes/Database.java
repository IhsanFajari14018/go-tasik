
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.List;

/**
 *
 * @author SAN
 */
public class Database {

    private Connection con;
    private Statement stmt;

    public Database() {
        try {
            //setting up
            Class.forName("com.mysql.jdbc.Driver");
            this.con = DriverManager.getConnection("jdbc:mysql://localhost/go-tasik?user=root&password=");
            this.stmt = con.createStatement();
        } catch (ClassNotFoundException | SQLException e) {
            System.out.println(e);
        }
    }

    /**
     * Method untuk memasukan semua data rekomendasi hasil generate pada table
     * rekomendasi.
     *
     * @param rec
     * @throws SQLException
     */
    public void insertQuery(List<int[]> rec) throws SQLException {
        int id_pariwisata, id_rekomendasi;

        for (int i = 0; i < rec.size(); i++) {
            int[] data = rec.get(i);
            id_pariwisata = data[0];
            for (int j = 1; j < data.length; j++) {
                id_rekomendasi = data[j];
                this.stmt.executeUpdate("INSERT INTO `rekomendasi`(`id_pariwisata`, `id_rekomendasi`) VALUES("
                        + id_pariwisata + ", " + id_rekomendasi + ")");
            }
        }
    }

    /**
     * Method untuk menghapus semua data yang ada pada tabel rekomendasi.
     *
     * @throws java.sql.SQLException
     */
    public void deleteQuery() throws SQLException {
        String query = "DELETE FROM rekomendasi";
        PreparedStatement preparedStmt = this.con.prepareStatement(query);
        preparedStmt.execute();
    }

    /**
     * Method untuk mengakhiri koneksi ke database.
     * @throws SQLException 
     */
    public void closeConnection() throws SQLException {
        this.con.close();
    }

}
