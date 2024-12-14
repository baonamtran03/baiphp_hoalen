<?php
  require_once('../../../config/database.php');
  include_once('../header.php');
  include_once('../navigation.php');
 
$id = $_GET['updateid'];
?>

<!-- partial -->
<div class="main-panel" style="padding:20px">
    <?php 
                            $i = 1;
                                $query = $conn->query("SELECT * FROM `products` WHERE `id` = '$id'");
                                while($row1 = $query->fetch(PDO::FETCH_ASSOC)){
                                    //get thông tin sản phẩm có id như trên và đổ vào các trường dữ liệu
                                ?>
    <div class="box">
        <div class="box-header with-border">
            <div class="left">
                <h3 class="box-title">Cập nhật sản phẩm</h3>
            </div>
        </div><!-- /.box-header -->

        <form class="box-body" method="POST" enctype="multipart/form-data">
            <!-- include message block -->

            <!--print error messages-->

            <!--print custom error message-->

            <!--print custom success message-->

            <div class="form-group">
                <label class="control-label">Tên sản phẩm</label>
                <input type="text" id="title" class="form-control" name="title" placeholder="Tiêu đề"
                    value="<?php echo ''.$row1["nameProduct"]?>" required fdprocessedid="i9pziq"
                    onkeyup="ChangeToSlug();">
            </div>

            <div class="form-group">
                <label class="control-label">Slug <small>(Nếu bạn để trống, nó sẽ được tạo tự động.)</small>
                </label>
                <input type="text" class="form-control" name="slug" placeholder="Slug"
                    value="<?php echo ''.$row1["lienket"]?>" id="slug" required fdprocessedid="oboy0m">
            </div>

            <div class="form-group">
                <label class="control-label">Tóm lược &amp; Sự miêu tả (Thẻ meta)</label>
                <textarea name="summary" id="summary" placeholder="Tóm lược &amp; Sự miêu tả (Thẻ meta)" value=""
                    style="width:70%;height:200px;">
                <?php echo ''.$row1["meta_detail"]?>
            </textarea>
            </div>

            <div class="form-group">
                <label class="control-label">Từ khóa (Thẻ meta)</label>
                <input type="text" class="form-control" name="keywords" placeholder="Từ khóa (Thẻ meta)"
                    value="<?php echo ''.$row1["meta"]?>" required fdprocessedid="c7g48i">
            </div>

            <div class="form-group">
                <label class="control-label">Số tiền gốc</label>
                <input type="text" class="form-control" name="sotiengoc" placeholder="Số tiền gốc"
                    value="<?php echo ''.$row1["giagoc"]?>" fdprocessedid="c7g48i">
            </div>

            <div class="form-group">
                <label class="control-label">Số tiền (Giảm giá)</label>
                <input type="text" class="form-control" name="sotiengiamgia" placeholder="Số tiền (Giảm giá)"
                    value="<?php echo ''.$row1["price"]?>" required value="" fdprocessedid="c7g48i">
            </div>

            <div class="form-group">
                <label class="control-label">Chi tiết sản phẩm</label>
                <textarea name="chitiet" id="chitiet" value="" placeholder="Chi tiết cửa hàng"
                    style="width:70%;height:200px;">
                <?php echo ''.$row1["chitiet"]?>
            </textarea>
            </div>

            <div class="form-group">
                <label class="control-label">Sale</label>
                <input type="text" class="form-control" name="sale" placeholder="Sale (New)"
                    value="<?php echo ''.$row1["sale"]?>" fdprocessedid="c7g48i">
            </div>

            <!-- <div class="form-group">
                <label class="control-label">Số lượng hiện có</label>
                <input type="text" class="form-control" name="slhienco" placeholder="Số lượng hiện có"
                    value="<?php echo ''.$row1["hienco"]?>" required fdprocessedid="c7g48i">
            </div> -->



            <div class="form-group">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <label>Ghim Lên Đầu</label>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12 col-option">
                        <div class="iradio_square-purple checked"><input type="radio" id="rb_visibility_1"
                                name="visibility" value="1" class="square-purple" checked=""><ins
                                class="iCheck-helper"></ins></div>
                        <label for="rb_visibility_1" class="cursor-pointer">Ghim lên</label>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12 col-option">
                        <div class="iradio_square-purple" style="position: relative;"><input type="radio"
                                id="rb_visibility_1" name="visibility" value="0" class="square-purple"><ins
                                class="iCheck-helper"></ins></div>
                        <label for="rb_visibility_2" class="cursor-pointer">Không Ghim</label>
                    </div>
                </div>
            </div>
            <div class="form-group m-0">
                <label class="control-label">Danh mục</label>
                <select id="subcategories" name="subcategory_id" class="form-control" fdprocessedid="b8z8t2">
                    <?php 
                                $query = $conn->query("SELECT * FROM `danhmuc`");
                                while($row11 = $query->fetch(PDO::FETCH_ASSOC)){ 
                                    //get danh sách danh mục
                                ?>
                    <option value="<?php echo ''.$row11["lienket"]?>"><?php echo ''.$row11["tendanhmuc"]?></option>
                    <?php }?>
                </select>
            </div>
            <br>

            <div class="form-group row-optional-url">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="control-label">URL tùy chọn</label>
                        <input type="text" class="form-control" name="url" placeholder="URL tùy chọn"
                            value="<?php echo ''.$row1["lienket"]?>" fdprocessedid="ppkiu">
                    </div>
                </div>
            </div>

            <div class="form-group" style="width:400px">
                <label class="form-label" for="customFile">Ảnh Sản Phẩm</label>
                <input type="hidden" name="size" value="100000000">
                <input type="file" class="form-control" name="image" id="image" value="" required />
                <img style="width:100px;height:100px" src="<?php echo ''.$row1["image"]?>" />

            </div>

            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="left">
                            <h3 class="box-title">Công khai</h3>
                        </div>
                    </div><!-- /.box-header -->

                    <div class="box-body">

                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-5 col-sm-12 col-xs-12 text-right">
                                    <div class="icheckbox_square-purple" style="position: relative;"><input
                                            type="checkbox" name="scheduled_post" value="1" id="cb_scheduled"
                                            class="square-purple"
                                            style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins
                                            class="iCheck-helper"
                                            style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="submit" value="1" class="btn btn-primary pull-right"
                                onclick="allow_submit_form = true;" fdprocessedid="bxji3">Cập Nhật Sản Phẩm</button>

                        </div>

                    </div>
                </div>
            </div>
        </form>


    </div>
    <?php }?>
</div>

<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- base:js -->
<script>
// Thay thế <textarea id="post_content"> với CKEditor
CKEDITOR.replace('chitiet'); // tham số là biến name của textarea
CKEDITOR.replace('summary');
</script>
<script src="../../vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="../../js/off-canvas.js"></script>
<script src="../../js/hoverable-collapse.js"></script>
<script src="../../js/template.js"></script>
<script src="../../js/settings.js"></script>
<script src="../../js/todolist.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="../../vendors/progressbar.js/progressbar.min.js"></script>
<script src="../../vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="../../js/dashboard.js"></script>

<script>
function ChangeToSlug() {
    var title, slug;

    //Lấy text từ thẻ input title 
    title = document.getElementById("title").value;

    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value = slug;
}
</script>
<!-- End custom js for this page-->
</body>

</html>
<?php
    if(isset($_POST['submit']))
{
    $title   = $_POST['title'];
    $slug      = $_POST['slug'];
    $summary   = $_POST['summary'];
    $keywords  = $_POST['keywords'];
     $sotiengoc  = $_POST['sotiengoc'];
    $sotiengiamgia     = $_POST['sotiengiamgia'];
     $chitiet   = $_POST['chitiet'];
    $sale      = $_POST['sale'];
    $slhienco      = $_POST['slhienco'];
    $signi= $_POST['visibility'];
    $select = $_POST['subcategory_id'];
    
    $check = $_FILES['image']['size'];
    $check1 = $_FILES['image1']['size'];
    $check2 = $_FILES['image2']['size'];
    $check3 = $_FILES['image3']['size'];
    if($check > 10&&$check1 > 10&&$check2 > 10&&$check3 > 10){

        //upload image
    $errors= array();
$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_type = $_FILES['image']['type'];
$file_parts =explode('.',$_FILES['image']['name']);
$file_ext=strtolower(end($file_parts));
$expensions= array("jpeg","jpg","png");
if(in_array($file_ext,$expensions)=== false){
$errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
}
if($file_size > 100000000) {
$errors[]='Kích thước file không được lớn hơn 2MB';
}
$image = $_FILES['image']['name'];
$target = "uploads/".$image;
echo "<script>document.getElementById('image').value = '$target';</script>";
// mysqli_query($conn, $sql);
move_uploaded_file($_FILES['image']['tmp_name'], $target);

   
//chỉnh sửa thông tin sản phẩm như thông tin đã cập nhật 
$sql = "UPDATE products SET `nameProduct`='$title',`price`='$sotiengiamgia',`chitiet`='$chitiet',`image`='$site_domain/admin/pages/post/uploads/$image',`sale`='$sale',`lienket`='$slug',`danhmuc`='$select',`giagoc`='$sotiengoc',`meta_detail`='$keywords',`meta`='$summary'  WHERE `id` = '$id'";
    if ($conn->query( $sql)) {
        echo '<script>alert("Bạn Đã Cập Nhật Thành Công!");</script>';
    
       echo "<script>
window.location = 'listProduct.php'
</script>";
        
    } else {
        echo '<script>alert("Bạn Đã Cập Nhật Thất Bại!");</script>';
        echo "<script>
window.location = '#'
</script>";
    }
    }else{
        $sql = "UPDATE products SET `nameProduct`='$title',`price`='$sotiengiamgia',`chitiet`='$chitiet',`sale`='$sale',`lienket`='$slug',`danhmuc`='$select',`giagoc`='$sotiengoc',`meta_detail`='$keywords',`meta`='$summary'  WHERE `id` = '$id'";
    if ($conn->query( $sql)) {
        echo '<script>alert("Bạn Đã Cập Nhật Thành Công!");</script>';
    
        echo "<script>window.location = 'listProduct.php'
</script>";
    } else {
        echo '<script>alert("Bạn Đã Cập Nhật Thất Bại!");</script>';
        echo "<script>window.location = '#'
</script>";
    }
    }
}
?>