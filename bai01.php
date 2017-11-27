<?php
/**biến bắt đầu bằng "$" ("$" + tên biến)*/
/** Tên biến bắt đầu bằng chữ, dấu gạch dưới (a-z,or "_")*/
/** Tên biến phân biệt chữa hoa chữ thường $hung # #HUNG  */
$txt = " Nhập môn PHP ";
/**txt sẽ giữ giá trị */
echo " Hưng ";
/** echo cho phép xuất dữ liệu ra màn hình */
?>

<?php
$txt =" Phạm Quang Hưng";
echo " Hãy học PHP $txt! ";
/** or echo " Hãy học PHP . $txt . "!"; */
?>

<?php
/** phép toán*/
echo "Ví dụ";
$x = 4;
$y = 5;
echo $x + $y;
?>

<?php
/** Global and Local Scope */
$x =5;
function mytest(){
    echo "<p> pppp : $x </p>";
}
mytest();
echo "<p>pppp: $x </p>"
?>
<?php
/** Các kiểu  dữ liệu  */
/** Kiếu String là chuỗi or dãy ký tự */
$x = "hello";
$y = "Hi";
echo $x;
echo $y;
?>

<?php
/** Kiểu Integer là kiểu sô nguyên */
$x = 1235;
var_dump($x);
/** var_dump dùng để trả về kiểu dữ liệu và giá trị */
?>

<?php
/** Kiểu Float kiểu số thập phân or số mũ */
$x = 10.589;
var_dump($x);
?>

<?php
/** Kiểu Boolean là giá trị đúng hay sai */
$x = true;
$y = false;
?>

<?php
/** Kiểu Array mảng lưu trữ giá trị trong cùng 1 biến  */
$car = array("BMW", "Lambogini");
var_dump($car);
?>

<?php
/** Kiểu Object là một loại dữ liệu lưu dữ liệu + thông tin đó để xử lý */
class Car{
    function car(){
        $this->model = "BMW";
    }
}
// tạo đối tượng
$a = new Car();
// hiện thị thuộc tính đối tượng
echo $a->model;
?>

<?php
// kiểu null là kiểu chỉ có một giá trị -
// biến kiểu null là biến không có giá trị được gán cho nó
$x ="HI!";
$x =null;
var_dumpp($x);
?>
