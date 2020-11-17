<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reponsive.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <body>
      <header>
       <div class="bg-light">
            <div class="container d-flex">
                <div class="left">
                    <div>
                        <ul class="d-flex">
                            <li><a href="#" title="">Get the app</a></li>
                            <li><a href="#" title="">Sell on Multistore</a></li>
                            <li><a href="#" title="">Customer Care</a></li>
                            <li><a class="bd-right" href="#" title="">Track my order</a></li>
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <div>
                        <ul class="d-flex padding-left">
                            <li class="tien">
                                <a href="#" title="" onclick="money()">USD,$ <i class="fas fa-angle-down"></i></a>
                                <div class="vnd" id="money">
                                    <a href="#" title="">VNĐ</a>
                                </div>
                            </li>
                            <li class="english">
                                <a href="#" title="" onclick="language()">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/285px-Flag_of_the_United_States.svg.png" alt=""> English <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="viet-nam" id="language">
                                    <a href="#" title=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJcAAABlCAMAAAB3G4FZAAAAclBMVEXaJR3//wDaGhz65QjYAB7ZHx3ZFB7++wDbKhz76wbcNhvgShjslhHZGx7iYhjdPxvvpQ7vsBD31AjtnBDhXBn98QHqixH10AzhVhfqjxLxtA7+9gD52gX64ATuoRDmfBX0xAzzvAzmdhXkbBbwqw7pgxKqGJ8GAAACRklEQVRoge2Z3ZKiMBCFCaSbgAaQHwVkRmd13v8VFxARdsI6Xkjnor87Lao4lZOc7jSOwzAMwzAMwzAMJUAtwIzaKGoJJiCuYxtXTEci0tQiDGAiEqQWYQALUVioS0e+8C00EndCiJ11CwZh2upKQ9tOZGejsNBIzERHZpuR0ut1eZJayBzYiBsbuzbYYKMQn3YZqdJBV2pV7Ya8GHQVuU1G4lbc2dpkpExHXalFJxKUeKDsMRL3E117e4x0DxNdB5dCgnJ/gmUw0RWUaHjmzfGhssD7yVRWK8z0RPZmYXJfiNc5bt9+SnX58bKsj3KF9kfjp/+SKj9xV+nKAE+veHk8uWslGqrzr2Wd4xXzDOC3Xl5h1fiHeWYtEZR67aqk4/qprK+Y4BoC7pMoK6p1PRzBMv2PrKYkK+A63C3KqkPCqyTIP+btH5wkbRuG5t1fEzdhEHpGXR7xoELnC9srpx1UyKUQ29FeP9yl1A9IN5i+LJVJ/0JpJF4XZLUFm3DBbkPCxxpNf1CODnU0VXI4zbqyiE7XOF3qFitRqJLJkhGODuUjVL1LW3hARpN/yJJiHBK23fLmtjp68/CSbHSIyaDgmI1VGmR178rIvsqoYSwRzKbjOh+8PBCNDiE69u+v1TxCtXPtt/+R6ERi1b+9wn9fD3jrsCsaI2XTxafxeohxZ3FDciL7IeFVmcugdrooIxkdtjYWl8XrIegoIDKyuYeWGYzPDcF6Qfm94OH4hPNNEa3wvMFafQjAMAzDMAzDMAzDMHbwF1fHFz1WtGEcAAAAAElFTkSuQmCC" alt=""> Vietnamese</a>
                                </div>
                            </li>
                            <li><a href="#" title=""><i class="fas fa-pencil-alt icon-margin"></i>Join free</a></li>
                            <li><a class="bd-right" href="login.php" title=""><i class="fas fa-sign-in-alt icon-margin"></i>Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
       </div>
       <div class="logo-search">
           <div class="container d-flex container-logo">
                <div class="logo width-left d-flex">
                    <div class="euro">
                        <i class="fas fa-euro-sign"></i>
                    </div>
                    <div class="store">
                        <span>s</span> 
                        <span>t</span> 
                        <span>o</span>
                        <span>r</span>
                        <span>e</span>
                    </div>
                </div>
                <div class="form-search width-right d-flex">
                    <div class="form relative">
                        <input type="text" name="" placeholder="what are you looking for...">
                        <div class="position">
                            <select name="" class="select">
                                <option value="1">Shop by category </option>
                                <option value="1">Shop by category </option>
                                <option value="1">Shop by category </option>

                            </select>
                        </div>
                        <div class="posi-tion">
                            <a href="#" onclick="search()"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                    <div class="shopping-bag">
                        <div class="bag">
                            <img src="https://img.icons8.com/ios/452/shopping-bag.png" alt="">
                            <div class="number">
                                <span>0</span>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
       <div class="navbar">
           <div class="container d-flex container-logo menu-navbar">
               <div class="menu-nav width-left d-flex navbar-left space-between">
                    <div class="d-flex align-center category-position">
                        <div class="icon-category">
                        
                            <button>
                                <i class="fas fa-bars menu-toggle" id="button"></i>
                            </button>

                        </div>
                        <div class="category">
                            ALL CATEGORY
                        </div>
                        <div class="menu-category">
                            <ul class="show-category">
                                <li><a href="#">Category 1</a></li>
                                <li><a href="#">Category 2</a></li>
                                <li><a href="#">Category 3</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="icon-menu">
                        <i class="fas fa-bars menu-toggle" onclick="showmenu()"></i>
                    </div>
               </div>
               
               <div id="menu" class="menu width-right navbar-right">
                    
                    <div class="nav align-center">
                        <ul class="d-flex ">
                            <li class="hover">
                                <a href="#" title="">HOME</a>
                            </li>
                            <li class="hover">
                                <a href="#" title="">VENDOR</a>
                                <i class="fas fa-angle-down"></i>
                                <ul class="display-none">
                                    <li><a href="#">Menu 1</a></li>
                                    <li><a href="#">Menu 2</a></li>
                                    <li><a href="#">Menu 3</a></li>
                                </ul>
                            </li>
                            <li class="hover">
                                <a href="#" title="">SHOP</a>
                                <i class="fas fa-angle-down"></i>
                                <ul class="display-none">
                                    <li><a href="#">Menu 1</a></li>
                                    <li><a href="#">Menu 2</a></li>
                                    <li><a href="#">Menu 3</a></li>
                                </ul>
                            </li>
                            <li class="hover">
                                <a href="#" title="">PAGES</a>
                                <i class="fas fa-angle-down"></i>
                                <ul class="display-none">
                                    <li><a href="#">Menu 1</a></li>
                                    <li><a href="#">Menu 2</a></li>
                                    <li><a href="#">Menu 3</a></li>
                                </ul>
                            </li>
                            <li class="hover">
                                <a href="#" title="">BLOG </a>
                            </li>
                            <li class="hover">
                                <a href="#" title="">CONTACT</a>
                            </li>
                        </ul>
                    </div>
               </div>
           </div>
       </div>      
        <div class="bg-color">
            <div class="content-banner container">
                <div class="top">january 24,2018 - 4 minutes read</div>
                <div class="center">
                    
                    <h1>Impact Of Social Media Marketing On Your <br>
                            Ecommerce Web Store
                    </h1>
                </div >
                <div class="bottom">Blog</div>
            </div>
        </div>
      </header>