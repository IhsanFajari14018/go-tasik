<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url();?>/lib/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="<?php echo base_url();?>/lib/css/mdb.min.css" rel="stylesheet">
<!-- Your custom styles (optional) -->
<link href="<?php echo base_url();?>/lib/css/style.css" rel="stylesheet">

<!-- FA ICON -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.container {
  /* max-width: 960px; */
}

/*
* Custom translucent site header
*/

.site-header {
  background-color: rgba(0, 0, 0, .85);
  -webkit-backdrop-filter: saturate(180%) blur(20px);
  backdrop-filter: saturate(180%) blur(20px);
}
.site-header a {
  color: #999;
  transition: ease-in-out color .15s;
}
.site-header a:hover {
  color: #fff;
  text-decoration: none;
}

/*
* Dummy devices (replace them with your own or something else entirely!)
*/

.product-device {
  position: absolute;
  right: 10%;
  bottom: -30%;
  width: 300px;
  height: 540px;
  background-color: #333;
  border-radius: 21px;
  -webkit-transform: rotate(30deg);
  transform: rotate(30deg);
}

.product-device::before {
  position: absolute;
  top: 10%;
  right: 10px;
  bottom: 10%;
  left: 10px;
  content: "";
  background-color: rgba(255, 255, 255, .1);
  border-radius: 5px;
}

.product-device-2 {
  top: -25%;
  right: auto;
  bottom: 0;
  left: 5%;
  background-color: #e5e5e5;
}


/*
* Extra utilities
*/

.flex-equal > * {
  -ms-flex: 1;
  flex: 1;
}
@media (min-width: 768px) {
  .flex-md-equal > * {
    -ms-flex: 1;
    flex: 1;
  }
}

.overflow-hidden { overflow: hidden; }

/*Hide Kategori when in mobile view*/
@media (max-width: 767px) {
  .btn-group-hidden .dropdown-menu {
    display: inline-block;
    box-shadow: none;
    border: none;
    position: relative;
  }
  .btn-group-hidden .dropdown-menu li:not(:first-child) {
    display: none;
  }
  /**For Styling Only**/
  .btn-group-hidden .dropdown-menu > li:first-child {
    border: 1px solid #ccc;
    border-radius: 3px;
    text-align: center;
    width: auto;
  }
}

</style>
