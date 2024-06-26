<!-- Xe đạp trẻ em
Xe đạp thể thao
Xe đạp địa hình
Xe đạp touring
Xe đạp đua
Xe đạp nữ
Xe đạp fixed gear
Xe đạp khác
Xe đạp phổ thông 
*thêm img vào danh mục sản phẩm
*tạo chức năng quản lý nhà cung cấp
*khóa ngoại sản phẩm với nhà cung cấp
*load sản phẩm
*đăng nhập/đăng ký
*mua hàng
*thông tin cá nhân
*xem hóa đơn
*load banner

-->




<!-- Hero Section Begin -->
<?php 
    $sql_hero_category = "Select * from tbl_phanloaisp";
    $query_hero_category = mysqli_query($con,$sql_hero_category);

?>

<section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <?php while($data_category = mysqli_fetch_assoc($query_hero_category)){?>
                            <li><a href="#"><?php echo $data_category['ten_loaisp']?></a></li>
                            <?php }?>
                            <!-- <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li> -->
                        </ul>
                        
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->