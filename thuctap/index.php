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
      <main class="container">
            <div class="d-flex main-container">
                <div class="left left-bottom">
                    <div>
                        <img src="https://media.laodong.vn/Storage/NewsPortal/2020/9/9/834719/Ronaldo1.jpg" alt="">
                    </div>
                    <div class="content-main">
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur eum minus repellat eius sint! Nisi quod id nostrum similique doloribus recusandae mollitia iste vitae? Reiciendis quibusdam laboriosam praesentium in laborum.</p>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae odit dicta excepturi, veniam quisquam commodi adipisci. Ducimus dolorum, eius obcaecati, deleniti nemo repudiandae molestiae, quam ut libero incidunt eum facere.</p>
                        </div>
                        <div>
                            <h6>Value of social sharing button on E-commerce websites.</h6>
                        </div>
                        <div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt autem magnam aut mollitia est consectetur quas iste voluptates doloribus voluptatum beatae nam sequi, in asperiores et a ad totam rerum?</p>
                        </div>
                        <div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex dolores corporis eligendi provident, minima, veniam doloribus dolorum labore, consequuntur eius molestias a molestiae voluptatibus odit illo aliquid explicabo id. Incidunt.</p>
                        </div>
                        <div>
                            <p class="italic">Now have a look on some of the states about mostly used social media plaform.</p>
                        </div>
                        <div>
                            <h6>Influence of social media on your sales</h6>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim ipsa tempore assumenda provident, explicabo id rem labore, maiores molestias eos aliquam cumque cupiditate eaque optio. Dolore itaque exercitationem similique rerum?</p>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis voluptatum porro iste velit magnam aspernatur reprehenderit nulla et debitis, cupiditate totam fugiat recusandae illum nihil repellat libero autem est doloremque!</p>
                        </div>
                        <div>
                            <h6>Bring inbound traffic</h6>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore saepe nemo eveniet nostrum ipsa quia iste doloremque aut, deleniti soluta iure ab, vel mollitia, libero id et accusantium eius excepturi.</p>
                        </div>
                        <div>
                            <h6>Marketer's analysis on social media.</h6>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quia quibusdam, itaque nulla ex officia et tenetur quam labore, atque veritatis culpa temporibus adipisci assumenda doloribus voluptate at consequuntur numquam!</p>
                        </div>
                        <div>
                            <h6>Facebook.</h6>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, asperiores nesciunt tenetur illo aspernatur, laborum similique laboriosam sed, blanditiis voluptatibus porro laudantium. Itaque magni amet unde necessitatibus ad facere ipsam?</p>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur reiciendis quaerat nisi accusamus? Aliquid vitae, repellendus non, laborum ratione molestiae ex quos nihil animi, molestias nemo enim. Natus, nam ipsa?</p>
                        </div>
                        <div>
                            <h6>Google +.</h6>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda libero aspernatur nulla harum recusandae, eum saepe dignissimos beatae magni soluta earum dolorum eligendi at fuga accusantium, maxime ex consectetur ullam!</p>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ducimus rem a necessitatibus itaque velit, cum optio est minus, quaerat neque nihil rerum similique labore accusamus deleniti praesentium facilis porro.</p>
                        </div>
                        <div>
                            <h6>Twitter.</h6>
                        </div>
                        <div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia quidem, nulla explicabo autem recusandae vel maiores rem atque aliquam! Quasi obcaecati quam asperiores, dolorum possimus cumque ad maiores magni quibusdam!</p>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quibusdam officiis ad sit fuga aspernatur, asperiores, modi labore aut esse quos nesciunt dolorem sed, nostrum deleniti recusandae incidunt culpa vero.</p>
                        </div>
                        <div>
                            <h6>Conclusion</h6>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis nostrum officia delectus fugiat distinctio perferendis ab necessitatibus et minima culpa accusantium ratione architecto accusamus expedita, minus in facere debitis inventore?</p>
                        </div>
                    </div>
                    <div class="content-bottom">
                        <h6>5 After Sale Email To Increase Your Revenue <br>
                            <span>Previous post</span>
                        </h6>
                    </div>
                </div>
                <div class="right">
                    <div class="right-margin">
                        <div class="search">
                            <input type="text" name="" id="" placeholder="Search">
                        </div>

                        <div class="post-font border-bottom">
                            <h3>Latest Post</h3>
                        </div>

                        <div class="Latest-post">
                            <div class="d-flex content-space">
                                <div class="box-images">
                                    <div class="fix-img">
                                        <img src="https://media.laodong.vn/Storage/NewsPortal/2020/9/9/834719/Ronaldo1.jpg" alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="title">
                                        <h5>Impact Of Social Media Marketing On Your Ecommerce Web Store</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit ente culpa.container...</p>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex content-space">
                                <div class="box-images">
                                    <div class="fix-img">
                                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSExIWFRUXFhcXFxUXFxgXFxcXFxcXFxcXGBcdHiggGBolGxUXITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGy0lICUtLS0vLS0tLy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBEQACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAACAwEEBQAGB//EADYQAAEDAgQEBAUDBQADAQAAAAEAAhEDIQQSMUEFUWFxEyKBkQYyobHwwdHxFCNCUuEWYpIV/8QAGwEAAwEBAQEBAAAAAAAAAAAAAAECAwQFBgf/xAA1EQACAgECBAQFBAICAQUAAAAAAQIRAxIhBDFBUQVhcZETIoGh8LHB0eEUMhUjQgYkUnLx/9oADAMBAAIRAxEAPwD02HC3Z40C0NVJoPpPi6TLToa5yRTZyAChA6IDDyQFMN1AxMGNZRZTg6sbRZG+qTKiqH029I/NUi0hwp+imzRROjlomL0JplDGg3hIpi2UzubIslRbEup6nlzTshxMzjWFZXpup1D5XNIJgQIu2NYM7xbXVUkuqsznJ1s68z5/8NfD5ZVD3HK4Nc0vaA1xa5oYW2tds+bW/SFpLDCMGl1/Q4cfH58uVOSSS/Xff7n0wGwtYAADkNgszvu+YTBv9EDQurckoJe4uEEnQgYTUALrPgJkydI+a/GPFK1TEOotD/CEs8vyvcIzyd/MYG3l6rPQ5Ssv/JxYYaXKr3Zu/CHChQrGCAf6ZhqN5PqVHkegbTAVcnQvia46ulns26JjJlAjEo2WpxRLDSkaJhBIYzMkVYQcgdljxJAsBG41SNNQzwgT5JNtDr/CV9ytKb+UKnuCB15jRA49mTSbtMH79JSBLoWqZg68wNJhI1V2FUjb9UinXQBhITJVoJnNA0GEiiXOjRAN9ivWMi6aM5MqVWiLi3I7qjKSM3wh4hhsA7a/VXexzUteyNJjrQoOlPYY1v2QNC3IJIAQBxCAIFkAV8SYTRnNnk6+B/uucZMvLr7Fxkj3v3JW0EktjyeIhLJluXSj0fDmAQYBP6ciVlI9LCkkaAKk6DpQBktbdanHQ1rUikiXIBkhyBpjabCfXRItJsmYSDkVRxzDh5Ya9MPZ8zc3mHpv6TG8LKeWMdmdWPh8klqS2Nhrg8SHyYjYSPe6oX+ytM40yL9Y3TslxoKnVgooakO8WPX8slReoipUhFA5DqJkJPYuO6HAKTQB52TRDYtzRumTSBdQkTt9rp2LTaM+s0ZrRb7K0c8krCpNJIhJlRTssERvJ+yRb2FQggIjkgZDkAwHOtG2qBN7UVXNJVGdWVsZhjBMaRJHRNMyy420PwrIASZcFSLKRqQgRmOEFaHM9h1PqUio+ZJQBCBBUqpG5/hDRUZtdRn9RoHGR7xO4HNTRaydGfMcdSDeLOfndSlwfnyZxOXyuFMWgkAEHk5YvC5No61x2LFBSe21fWude3v2PqXC6hIkFjswAtYCTAF9Bb2WrVHPhk2rTTs0BFgZ5QPcX77qTfbqC9ga4wBE6TI+6fNEtJMY+loZH4EkU49QGaydj+eqZK5lkHqOv8KDaxgKBoAnp6pk2KzFMiwapMaoQSsreFMn8KZnp6hsMCBvqga2WxJCABhBJxQMgoELqFMTIbpHv15IBchlanYWn7+vokmXKIprUyEhmVAzsqAMYhanCx1B8GUmi4SpjHaJFPkIm6ZF7nOPNAN0LdW7fn2RRLnR5njXD89RtUAkixjlstYJWedxOprbdHpOF1IaOw/hZyW538PL5UbVF4OoWTR3RaY4MM9OWiRdOyy0TukarcE20CBcuQLK0gztqdknSCLcthzKggQVGpM2cXFbhvNlSJlyKznKzI6UAHUfIA2CVDb2oWAmSQ9AmAUEkFAHOTAUQgQ2iRzUsuNHm8fxPEnHCkwtbQDWuJLC4uI1YHAw2RFzptK59MpS6/sdEs2KMa25fU9BC6UctBnZAwY6piMoMstDjrYEFMmwzUskVq2FOfumQ5AVH2QS5FVz57q6MXKzmNlA1uWWNgSpNUqRboVjbVS0bRmXDWOxUUb6mZ3GuJvo0X1AcrspDTYjNBiNjdY521FaebaRvwtObc+STfsZHwLxnE1gc9Zjzn82ZlspiQHNJyu1ic2gkiVKwzT1Lbye5p/mYskvh1e3Pke4p0z2B22WjFFNHlMLWxdHGVRUz16DgwMa0NzMIAzOAFyJkGeYPbmeKUEtKv6nVHiMc5OM3Ta7bfjPYsuBYjodR3hbxvqZSS6CzCsx2ACYgwOaBkOQJgOKCWLTJOKAOdoEDFoEdsR+fmqAvYU3DAkTc7IslQTe5ZyXAOm/6pGldGSSJmLbBAWrAzpisymVLRstDiUugL2a/omJorF5B6c06MW6Y+gxrrTc22jpfZJmsFGWxNbDOacpHtB10ghJOxyxuLplathxYtkk62gA9DN1SfcyljWzjzB8Bwtr2M97BO0S4SWwyjScZgGRsk2ioxk7GupEWhwPVKy3FroW8I48/Y/opZvibF8Vw2djgWhwiTadIIN9CCLHVEatCzRlKL9NylwHBOYXBjPKXG1xl3Db3VZJJmHB45wbpbN+3ken2gkj1lYHq+pRcwB8xFo+YTboPTVV0MWkpWaNF5j+AodG8W6OqnbVNBIJsQLd+vogFQsuTJbJzICxbjdBLIKYgdECBcUACUCOegGSLDZA1sGX9EqHYJTELlAjKcVqcTZ2WQSCLbEgH0G6AptWIeSRB2/JTMnbVAMfCbRKdDvEkDWUqNNdoYKjiA0khpN7fp+iVdS9UmqeyCo4cwXAxB7HodeyTfQccbrVZxpkmST1J1RYtLbtl2lAIAcSNRt0M7KToi0nSY80mzcZSbgi4jdTZrpV7onK3/IH2BQFLqLDWsMgk+pH8J7sSUYvYzvif4iZhWMdkL8zwwgHQGXe9j0WGScotJHXihCabf4+e4DOO030fGa1239sgeLmd8rNYvBvcQHcnQ55HDaSp8vcjHCGX5sck4q7fVVzR5/hfG8dUxjy6ow0oIFH5W2Ni0wSHW1Osq3w+SK5/wB/Q5oeJ8Nllpp79O3nfU9vw7E52h4lp0LXfM0ixaYtIPKyUJ6l9jolDQ+drmn5FouColsCUyTi5AWRKBHFAyJQIFxQJgpiOKBkIEckMhxTE2DCBGVlvC0OKgY2TF5DaRcRlaNdgLn90n3ZUXJrTEqPbEiLqzBqgBVLUVZOtxHUXOdYXvPX3SaSNIOUtkXaVVwALpO1xbS38KGl0OmM5JWyxQqh1og8xYQOmhUtUawmpbFqnRI5Fv5cR91Nmqg16AVD0n3kJolvyOFUAXE3Av1Mfqpm6VmmNanX5ys51MGwmdxEj3F07JcbPPfEGGY9mUmDmBDj8rSLDaYIJl21trhq1kU0rpNe5zZ3GWCWFum2mm+Vrv5O+fLvsUWtLKb6VXNJyht82VzSHC+mkmR0K0nCOVprdb+zOTDky8LGcJNxltXWmt0u3JvyojC02is1waRIvyJnUDlbTqrgprHU3dfp5+ZjL4L4lSxx0pq2uifWvLsenw7gJA5ySN7Bc0YtOTfV/sj2pZE4xSd0q+7ZZD1RNhNKBpjYG/4Ui/UyuP8AGGYWi6q+8QGsHzPJOg5DUz0OuizlkSdLmawwuUdT2QrhXH6ddrHNDwH6ZhbNBls8xBG2iI5HtqX16EzhFXpldc11NTMtTCziUBZyBnIEQEAcgEQQgDroDcyHlaHC2Jed1Rm2FTrQeuyKHHJTDq1i7XtoPRJKipTcuYjTb3VGXIOjWcwyCRtb86JNWOM5QdoYXunNtOuv5olSK1Su2a2FrZ4JAF4N/wA/AsmqO/HPWrZpBm2n7qDrroKxIIET+/8A0IRM00jLxLTlMakakWBHrdPJDXFxMceR4pqaV19PU8f8U/EtWnisO1+emynU/vQc9N1N2USDYyBmlpG5i8FYf9sP9vpXU7Yf4+Z6Yt31T5r0/k9HRxNOq0PEOaZyvuWug8vzsujHPVFSR5+fGoTcJrl16MUxlsjWhreQAE3Jlx3uZjTotuW5yO38vT8r85DaVBpILi4kaWEfdFvoNQi3buy62NgoN/QcwJMpDQkWJxVYhpy/NFp5qZJ1SGp07fT8r6nkfiDhfiXLZIi5uT3O66MUIJaaPI4yWdy+Im79TX4ThMtNreQEDlFxp1UZUpJo6uE1QSk92bLHKTqTHNSLRBQJkBA0EdEDIaECSOIQMWgkyK53WqOCbKrnqqMHIW16ZmpBivEdY7Ior4lHGrJRQ3O2Op3tIE89LJMuNv6lmmCAbDKYEC7Set+vuoZvFNJ9vsXsBQ5bxrFhabBRJnThhXI0TmjMNR2EjuVm2kddSatGZXxjp81hvN/rsFGR6Vrj05+hOOWufwp7Xy730+jMrFfFmGYYNUhzTBcGnK3bzO0FtJXP/m2rjBtfnL89j0P+MaaUsiTKPHMPSr08zWhxBs4E7wYykWgmY663v6HC8RDLG4vb9z57xThJ4JVKNSXVPmvL69AuBYfIwtgAFxIaBDRJkwBpck+pVuEYv5TPFly5FeT0+hsimFJ0UGymgaiPp00my0hwCRdEwgYD6JNgJRZLi3yF1OHwJdHab36J6uxLwbbnMpgaCEWCilyGBqRVDAUiiAgQYCCyXBA2FNtO5SDoAgQKYjAw9Vp+YmI2AP3WzT6HmY5Rf+xUxLgCYMiYmI/hWjnyNJ7CDUsnRlq2FZ5MKjG7dD21G7z3HNRubqUepZoHQT5SbHWD+h0SZtDtexapZwSCS0+uql0zeOtWm6NGlXe07Am1/k/+hod7EhZtJnXGcov+eXv/AABXxweAc2UiT5ZIJGliNEaaFLOppO6rsZPFnuGHqw6XuacrYIBETLYG+g01WOXhYzi1FbnRw3iMsM1LLO1f27rY8Bg8VTotfUaH4irUHmoMc9zWgk5jUDD5rG8zBtbbhhHM5aI7Jda5+57fEPhpR+Jk3bppN8vRr9j0HwlWe8PiRRLaZYMrWDPfxcrRcCYb5iScnzFdfBYpQi3JHkeL8TjyzjCDtry70/xWeywuFzCwJO+9ui6XKjjx49S2RYfSHKEkzRwQ5rRy/VFlpIYkUSTKAe4KZBKQwC6AhhaRRxXF6VMTVJYBAzZSW9yRYDuspSnG24+25pFYptR1pN9Gq/ox8D8SmtjK1Gm0OoUmtHji4c85TZ2haZIgf6TMG1Y56kLiMTxbrdHofEnQq4u7MpJqhrCmNDgUi0zpSAAuTE2CSgLJlAWeIo1osuxo+ax5K2LGLrU2U89WoWNnKIbme51pDRaYkXPPRcXEcVHBW1t8kj2+A8KycenpajFc2/0QmjWw9QO8Kq+WXdTfTy1Y5hua4G+8LPHx+uWnTT7N199/Y24nwD4GL4vxU4LnJLV6cmvcu4ThLXgPpV2PsMwILSJJAsdrLR8Yk2pKmc2LwZzismHIpJ9ar+fZmVxtj6NUMMEOBLXDQwYI9Le66OHyrIuR53iPB5OHkk3aGYV7txA6kA+gK1dHNjc+q/Y18PinEAHQWnpy7LJxR6GPNKSSZdp4kDR5EkeR0ubO5Nri5UOL7HUssVyf0e6EYh7XOIgG1y0EDqcu30HRUk0ZTlGTaq/T9aKww50b5hzEwbxyVX3MfhvlHczK/B8r3E0W5jbNABDgI+bnpPNUtF6uphkjxCi8T/1fTomvt69zR4JTDG+Zsk6yNIJsDOkXU5XfI24GCxx+Zf1+czL+MuMVaOQMe/KXE/2yWuaIblGaCCYDj5hbKbXavI4jDKWRuT26c6+36H2Ph/ERjhSxJN3vybXbZ9K6/Q9RgcU94BeQ4/7CRmGxPXbl1Oq6uHjJY1qe55nHZccuIl8NJLydmgH7CCtjGzg5ArCBSGSgCJTEJqOTSIkzF4rhBUBBC1g6PP4jH8RGFwnhPh1C5uam6IzNtIOoi4PqCnkxY5LkYcLxPFxlp1NL3T90z1+DaAAsVFRVI9SMnJ6pc2WhURRpqDa5IaYRckVZBKAAc5MlsXnQLUeJqOIO5JMCN+Xc9F2dD5iVqXdsz+OPpuYzxXOa4OcynBIy1HAedzosGwbRJJA2K8nj8clOOSCvb9z7H/09xUHw2ThsrUd7tvyqXt596MvAfEWJp0CwvqOe2GUwQC0NtchwOxIPp1Kz/wAecsmpKo19b8jsy8fw+LA4atU78mtPnz9Kv+6VDiT6NZuIDnmpeWOqEgkgtsAJA0NybhdGVZJxWOT9Njh4XicMJvLCNc73/HXkamGx1So91V7zJ0F7TGnoF24YKEaPnuMzvJNyvc3KGNLmw6CR/kZJA5Dp6LXSlyONZ5SVS93zNKkC23lNgZBB10UPc6opx2dfQtMxADS0tBnQ3lpHJTp6m6ypKmr/AGFPr/kCffVPSZvJQ9mPdAzEuA2JkexScEax4mWlW7COJaQWg669d0tLNPjRaaTH4eucpi2mgH5/Klrc1x5Hp2A4hw/NBqVfBboHGTMgWFwIvzCjDnVNvzb7bf0acb4bPI1TaVpLq3aXRdL9DsKxrZDajagb/k3e8G2w091tkj8sZ9Jcvry9zl4dqM54btw5/R09vLr++5bp1JusqOtSss0kmaRLEBSaUgZTELeU0SxbgmQyuWJmTRDKY3HaEWCiuoxjUFJDA5IqyS9A7CLkirODkUCYt7kEtgSmKzx2GaHuDXEgT8wuQdoE3vC6Zy0qz5/h4fFmoe1c76UhXx/SfRo0svzvcxtYEB5j/EmfKHWHPW5vfx/j6puCe3NeX9daPt8fhqx44ZZxuXJvv692uV/d8ynjsC0MFdrj4bgcuam+7hsCW5S2dzEha4uMlNqNbv8ATqefxngkOGUsql8q6Vum18q67N9XXYyKuHFtDpfvf+ey9GjwNVDaFtAqRjPcv0ahVo5pIuU8U6IBhOkTrklSZcpYskgHXopcaRrDPJtJmkBMe3qsj0OYl+itGMtojKWHkgtBd0iba3I6Ttspcu5pDFbUopv7hvxeUG2nLRLTZpLOoIfWZ/V4N9KhWFOuWua9j3EMcHTNiTB3DgLH6c8+CipOVbeX7rzPW4bxeU8MYKS1Jb3X2b7exSw1CphsK1tarS8ScraTKYJa0OIIL7GcrjAiI0lC4SX+uuWn127qtu/Nk5/Escf+yWODnyVr5kuTvfs9lyrqXMJWvrb2WzRw4pmuyrZZ0dylsM8VKh6jg5AWHCBkIEAWBMTSAcxBLQJTJIlAAlyQrJ8RBVjyW6AyYzekx9zosVlTlpOuWDTj13+PkVXPutjjbI8RMWo81wWs0V2F2k/Xb6p8an8F15e1nD4FOC46Cl5petbff7mz8T/DbsS8kVAKbhMyLGZuD99QRZeDOMtWqFf0fouPJsoTukqrztb/AMdjF+LcWyjQpYdjpLQADoXQBmPaAB6rTg43mjp5Ru/qcXjuVQ4Oev8A2yNUvRp/nqZXCeFte7K58EOb5YJzA3O3sNTyXtZcvw4OR8Rw3C/HzLHe9r+zUxnDqT3Oe41KYmM2RpZa1g3KAIG0j2vhh4mKShqTfrudPF8JrnPJolCP/wBflX59fUa/4cHh+Iysw3A1blJ/9Xbdit/8hRfzHP8A8Y8kLxyT+u23PfyMRpXUeLVlkNgxInYg29zomnsJxqVI1ME8kC/us5Kjt4eTkt2Wagv0OqlHRKrK3iQYVUYa6dA42S22+vTnZEeYZ7cdjz+JzFwLXQecx9ZstG2t0c+JKWz3BwrnZ8znEnmSSfcpK3zHlarY9dgHGBaJ3IvHT2WEj08DelbG1R0WR6EQpQFjGlA0FmQOwmtKQ0galtU0KW3MV4vJMz12c8IG0Je5BDYpqCUMDwspzUE5PkjoxweSShHmynhaL2uLnToRczqZ9B0Xk8HxMZ5tPez3fEeFcMGpdK9uX7j3PXtI+ck6FeMqoz1I8c8rrZ86iavHcQxuUVDG0gGPdcE+Bwt3Xsz6LhvHuOjDTrvzaTfv1+tmNVrPdU8UnM4EGTeCLjtf7rSGKEFUVSOfLxWXO3PLK33/ADkez+EaIc19ZzG+WMrYhsn/ACjbUaQvI8Y4qWJaI9tT896X05v2Pd/9PcJDK3ml0dLy2tv13r3Muhj8RU4ixzapdTcws8PPAJLfMXNykf45rg7xfTgc0uH0TXzN70u/2PpY4m8nxIv5a6lnjVQ0nuY0gCc2VsweRLiZMESAAG9JXreF5Pjxcnb0txV+Vb+p8d46lws1ixJRU0pOvV7c9kmrpdSg6rmAsJmS68unn+bleykfM5JWv37jaLJVGKVmlhqxiI/52USR14sjqi3TaXAwCbTa9lDdM6oxco7KyrW1VIwmrZNG+YuIaxrSXvOjBzPc2jUzZZ5ZqCs6eEwT4iehfV9hHEcNhTHhYltV2UvLWhxblAkkPiBaNeeywx8W20mutHdxPg0ccHOM90m67pb7f2JwFOiXkukNEQN3dfp9V1ycktjx8McUp/Ny7dWWv/JMNTeymLuc4hoyO5a5tC22s6rz3xKdveu/I+lh4fNJJabtqub258ttvXZnoKOKabiI5Tp0WuOcZq4uzHJGWOVSVeo2m9WZqQ/xL3SovVuEEDGZoSKukIqvVGUpCgEEBl8oL1WVnpoxYTG/n2SZcUIGaYAnssc8FPHKL6pm3DZZY80ZLo0Xa1B5EyMsbXnlebLwsXDPFkU75M+qzZY5sUoJc0zPqAiOu26+jjR8bNNA5TyPsqIp9jy1anyXUfPvYp4lkqZI0xujmhopAZcxzEkzEae89eVlFHXrWmvz8ZsfDnGDRLg+7LAjWNrbkfay8zxHgZZqyY95Lanykn0/g9jwbxWPDSePN/o97/8Ai+XtRrVuP4OmC+m1oeZiJzXuQCYDfVeBLhuI1Usel9279vxn1+PjuGlBtZFKK6L9zx2KxhqPLybu/wAf9QLAFfR+G4FgwKC/H3PifGszz8VKbdravQdTqk9dF6SPEkXaFSCqMVKpWW6dTQqWjeMuTLeDrS7JJE/ZRNUrOvh56p6O4/FYN3+p739jIWUcsX1R1ZuEyJbxfrv/AAYPE6bag8Ko5zWH5oEgxpmbuAb9CJTy43JKSV1+fQy4XilinKEm4p9V0a7rqjO+HqQbmDKck03MmScoLpLiO1vqonGEYpydJNP+johnzZZyjFOUpRa9O79DYf8A2XZbOkCZEwRN+dpmP2Vv/uh1X8f2csf/AGeZcpfen3+nMw+K8NZnYWVC8gyHAFpB6f8AOSUuHjPeS/s3x+I5MEdGOd9b6p9a/KPS8FpNA8oibutq7SeugRHFotef26B/kfH0u26VO+rtt/r13N+lKTOiKY4OvCRdjmpFo5zkxNiCUzNsW9ydENksehocWQ94EE7IoHJLdiHYkAbaz3T0mbypIpV8fDSYmL2v+aIljbWxmuKUeasy8b8ZVadH+1hw4iBBc5/eGtAJFzqdell58uCyc2/bn+e573DeMcM0oRTTS6tVtXW99uuxo4Pi7qrWOqNawkCWgzGkie8hdmHA8cdLPJ4rj4Z8uqKpfr5+Ro//ALB5q/hk/wCau5ivwpdYXPJb6q5nlywuSpGVXp6hWce6YOCaHf23OyybOIkAm0OtMHmNORUPbc68TUnpbr86/nuXW8NnyscC5ph4aZ8p1y/7bm1rqNRssN7J21zrt+5hu4dFbwnOFzlnUCdJ66SufiINw1Lmtzt4LIoZPhy5S+V+V/x/Izw6nhgvkgOLSTrIGk66bdFeJRTaXqcuec5RTktlt9V0GUWxC6UcMy5TeARb0naNFRkmk+RcqVWiwaQLnWDfS/JKmaOcFso/z5bjOHY+jTrB9R4YybE5iMxFmkxrbXoVycbPTiruev4Jh+Jxepclv/C36/w6K5xbzUfFWBJ1cYI9r9lePHDTF6fsc2bNm+LNfEfN9XT/ADsdVwlR4BADpGjYJ7Fuup1hbaorY5pYcs6lz9OftzMjGNr4WKrKTs0gtB8oPO56eqyzJTg4rc7eD1Ys8Mk/lruvt9TZoFmKPisD6THAfNDnEiAXZQZi2vNc3DascdMvoeh4lDFxOXXB10frfPbn6l3A4RhBzHtInTQzNj+XXXKTPNw4YNOy7haLW3kX1E3Gtz1/dRJtnRixxjuabXtBHmAJiJsLzAHM+U+y482dRkoXuz2OH4Vzg8nRAh0ldJwXbGtcgdgPcmS2JgqjPcB6ETIXnhMjVQNWrMAflk0iZzvZGfiTE9FolZx5Wo2BTNid/wDXn1Q10Fjls5Ln2M7HUpdMbidR9x9VUVsY5Xcmy3gqbZ1MQTykjbslKysEYt7v87Fv+oPMf/DVGlHV8V9/shLan51ToxUyhVBdJ5G9ttj/ANWnkccrlcioGCYNhuYkgcx1SY4y7ljBcQNIFpY14N92vB0lrxcH3GtrqJQs6cHEKCppNez+jW5m1G+bMJ59RfeNPoihN9izjMV4jy6Ms6gHU8zzKMcNKoefM8knJgsatDmbHNKZAJegKF1BnoVmZQ4nI6DsGEy4dYMdiVxcTWuGrlbXvy9z3fDJyhhzKD+ak/Ok92vRfYq4UWXVHkeZlds0sNQzaui0gAZjY8pshsUMak937bgcTdAyioXBwk3MHoWncEH6JJX0NJSadKVr6/p5FfAuNO7CQeiNCfMl5pp2maeExRjrKHFBjyyRc8YsaZOsJVbNviPHF2ZmM4piPEpMDgaQOcggageW8Sbk9LLly8Gp5FL82PT4bxd4uGljlzrbbvfP0fvyPQcOx2bXVdE4UcXD8Rr5mkyoFm0dqkhjkimdZAbFesbqkYze5UxNWLBXFHLlyUtip4sSTrp2V1Zza1G2yrVfJkyforSOaUrlbFVq1oFiDqOmiaRMslquogvLj5iep/dOqE5W92CHEadkMmLrcZ47ktKK+IyadT3j0SGpEF/LXfqnRN1yFOEhAhLrpFLY6q/NAI2jQCeXdKjXU5UQxkDNImdN+/JAPvZITMmQCgZxcgaQvDVsj8w1Bkcp68wonFSVPkdWHI8UlOPNchuJrh9QkMDASPKNBoLR+nNKEXGNN35hnnHLkc4xpPouSNbEOoUmsZUBzk5nhkNyACAHkiSbElsiJvBXJPLkdyx1S6v9j2MPC8PFQx57U5NbRS2vZar5Xzrn5GHxmvQmk7Dvc9j2ky4C0ECLd7iSRvdPhs8sjakuRHiHhuPhlFwd2WeCYU1SRBgTcCw7rTPxMMS3e/bqcnB+H5OKnUU66vovqaeJosaJFhMdVhw3FvM9PU7fEfDY8JBT6XXmVauJzdF6MY0eBlyuZXsrMrLuAqxpZRNG2CTTpG9hnaLnZ6+NjzVupo1c9yfGEXRTDXFLczsXjgJb9VrGF7nBn4lR+VGRWrkwb/n/AArZI82U29wRXtHunROrags5I6CEDttETIiEBzVJDGYe9jtyj0S1Gixb0hfhC4/Nv3RZOnmgcgTJoUEhHApiBekNCSpLBcmNHJDZJcgXMB70FJHEyEDSAa64OiCk6JYYcHf9Q1Y4OmWMRwpuIZLXjM6QaZIY6WjN5Sdb7D9bcmTJGHyyVR79P6PX4fFPJL4uOSc7fytq/XfmYZoOpkUiCBSBaGnbM4vPrLu9lPDKLTmuv/4b+KZJalil/wCK+73f6mhj6uQM8MiTSEkG7X5nGQR8rhZZ/wCOsrm5r/y29KX2Lx8fLhljWNprTur6uTb9GVMBiHljQ8ElpcBUP+WYlxnsTA5ALXhsKhOTXWvsY+J8S88IKS3V/d9TUp1F3Jnz0ojGlUQy7h3tE9ual2zWEoxuy1hsR1USib4stdSanENghYxT4p3SEu4hzunoM3xDfMr4nE5vuVSVGU5anYgVQOvfbsmKiJQTQxr0xUMDtPzdIq90Op2Adv22SfYuOy1HHUlAbW2TDevuP2S3HUPP3/opOVGJF0hgPqJFKIsJFEEoCgWPgpM0SN/CVuGtGSrWl4N5ZUZGnLlmEmYFua8qfFZpP5VXpufV8P4Twccd5Gpeb+X6c/ffmeb4g+marvDcHNtEAgWtabnSZjdd2GUpRTkqZ4nF4scJtY2mvz8smRtp1XQcDRwF0CZzggEzn16g0eZ7nbY89B7JUbRyPqVgwm57Ry7BFFOZNN5a4ObqCDsbi/ZJpPZjhOUd0PFVzjLjNydtSZJ7nmnGKSpEZskp7ydj2AR+fgVo5pMJwIkRprF0WGke3Cv1AkcwQQsP8rEnTkk+zOz/AI3iZR1Rg2u63X2L7cM6LEH6d7G/qr+Njb0t7kvguIjHXFWl15fZlOq0WvrqtEzjlCmhJhMQBKQwgmSS1AEF9kWFBBAmWqb4NvW/4EmXF09gy8a+4RQar3Izj/b6f8QP5e/2KzgmZBUXDf6iUmVFia1NDHF0xIUlHEIBCXFI1Rm16DRUNSBmdGYneNvoFloSdo748ROUVGTtIdSYrRhOTZaZoqRg+YxiohhEIEhDgkaIAoKAYLpIpvYawJkSHMenZm4g1asb6pNlQiIY/cXI01v7LOUYyVSVnRjnLFJSi2vR0TjOM4vyhuUjO3yuYwne0xeZA52Xl5PDsSepbfWqPqeF8eyTjomrfpd9015969i87EF13Nykwcvca9raLu4PJKUNMnbi6vueB4tghHMsmJVGaUku19Ptt/QBK6zyqCa5Mmg80osmqOIQAJCBoNqBMMFMkcHEX5HX81QUtgPG6fUpUPUu33ONwmZgwgCKiTGhLikWkCSgYl6k0RWeFJsiAgBjE0SxjUyGNzJk0JcgtAPUstEgJoTYeVMmzgEAxdVqTKixvDnQ8SzPNsvMmwjrMLLJFuNJ15m2OSU03HV5dz3NfgmGaPCraw15NPWfltYktBJFucnaPn58Q4ZLbte/2PusXhsJcPoUdLap1t9L/kyOMcA8OoHMqAUyLOccpYWNgNd1IFj30gr0+G4qHw/O/ruzwPEPC83+QqdR07PolGPK/RGBMm69M+aew5ptAVGb7sbAi/p/1MlC5skHU4oAmYugKCbcymJ8g88GyBIjxf8A1CChjeXNBIBdNkABUKTGhEpGhLkAhZSLQh4UmlkBqAbCaE0JjctkyL3OiLoCwCEirBIQOzgEAGAmSdogCHe6GOI/AeQ/1B+Wm5p55nTLWj2XPlbrSubOzhklJTlyi19fI9Jxfhn9cRiMPiA0OpGm8E5ZBmNjldchfNKoSayLdP7/AMM/RNc5wjLE1pl68vJrk1/TPK1qdShSFCpUzuNRz3tMS09SCRckm0bndenwEVlk8zVVy7dUeF49meCC4aErtW751aaXlfUXSK9lHx0ywyoFSMXFjHvCbZKizg5IGgpTEcSgEhjUyGcdUATATFbEvqqbNFGyG1ErG4nOegFEUSkXQHibJWVpODkwoEqRo4ckwIQMNrkyWgnGyBJCyUiqIJQAdMpoTRJPJAgHOSKSAL0WVQFVs9Pz6pNFRdMRTw9YHLTLgSdGkif3WOTBCf8AtFP1R34OOyYlWOcl6N/sMZhC2Q8nNE7GZgiTPIrRRpUjny5XOTbDbIVGLoYxNEMawzqmQ9hgTIJlAgpQIa0qjNjBb1TEAgCi96yOpIAOQVQYemTpOzIChTgpLQdNyaFJDCAmQQ5qQ0wCgfQ5ABPNkCS3FpFkkpiOcUmCOYU0DOfebQhhEWQkWSmIirTQwjIkNQFnBqVBYwFUQG0IEwy9BNBBMTGNCZDYYCZIQfzQKgpHIpgZrlmdQjdQadA0COTESgCWIQpBuVEolqBMgoGC5IaIKGPqQkg6HFDGQUAEE0IipogceYBSGSNUw6DKug7fqmyYcwKWqCnyJG/qkIFAywEzJkIAa1MhjjqmZ9AxofRMQI190DfI5AH/2Q==" alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="title">
                                        <h5>Impact Of Social Media Marketing On Your Ecommerce Web Store</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit ente culpa.container...</p>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex content-space">
                                <div class="box-images">
                                    <div class="fix-img">
                                        <img src="data:image/jpeg;base64,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" alt="">
                                    </div>
                                </div>
                                <div class="title">
                                    <div>
                                        <h5>Impact Of Social Media Marketing On Your Ecommerce Web Store</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit ente culpa.container...</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="categories">
                            <div class="border-bottom">
                                <h3>Categories</h3>
                            </div>
                            <div class="blog">
                                Blog
                            </div>
                        </div>

                    </div>
                </div>
            </div>
      </main>
      <footer>
            <div class="border-footer d-flex container container-logo ">
                <div class="contactUs">
                    <div>
                        <h3>Contact us</h3>
                    </div>
                    <div class="d-flex margin-contact">
                        <i class="fas fa-home"></i> 
                        <p>PO BOX CT16122 Collins Street West, Victoria 8007, Australia</p>
                    </div>
                    <div class="d-flex margin-contact">
                        <i class="fas fa-phone-alt"></i>
                        <p>+1(2)345 6789</p>
                    </div>
                    <div class="d-flex margin-contact">
                        <i class="fas fa-envelope"></i>
                        <p>contact@yourdomain.com</p>
                    </div>
                    <div class="d-flex margin-contact">
                        <i class="fas fa-globe-americas"></i>
                        <p>http://yourdomain.com</p>
                    </div>
                    <div class="logo-social margin-contact d-flex">
                        <div class="social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="social">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                       <div class="social">
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                       </div>
                    </div>
                </div>
                <div class="information">
                    <div>
                        <div>
                            <h3>Information</h3>
                        </div>
                        <ul class="sub-menu">
                            <li><a href="#" title="">New Product</a></li>
                            <li><a href="#" title="">Best Seller</a></li>
                            <li><a href="#" title="">Feature Product</a></li>
                            <li><a href="#" title="">Deal off day</a></li>
                            <li><a href="#" title="">Handcrafted, Artisan Jewelry</a></li>
                            <li><a href="#" title="">Jewelry Boxes & Organizers</a></li>
                            <li><a href="#" title="">Jewelry Design & Repair</a></li>
                        </ul>
                    </div>
                </div>
                <div class="my-account">
                    <div>
                        <div>
                            <h3>My Account</h3>
                        </div>
                        <ul class="sub-menu">
                            <li><a href="#" title="">My account</a></li>
                            <li><a href="#" title="">Wishlist</a></li>
                            <li><a href="#" title="">Store List 1</a></li>
                            <li><a href="#" title="">Personal Information</a></li>
                            <li><a href="#" title="">Order History</a></li>
                            <li><a href="#" title="">Other  </a></li>
                        </ul>
                    </div>
                </div>
                <div class="instagram">
                    <div>
                        <h3>Instagram</h3>
                    </div>
                    <p>Instagram did not return 200</p>
                </div>
            </div>
            <div class="end-border">
                <div class="end d-flex container">
                    <div class="end-left">
                        EStore - Designed by <span> Netbase JSC.</span> Coppyright &copy 2006 - 2017. All Rights Reserver
                    </div>
                    <div class="end-right">
                        <div>
                            <i class="fab fa-cc-visa"></i>
                            <i class="fab fa-cc-discover"></i>
                            <i class="fab fa-cc-paypal"></i>
                            <i class="fab fa-cc-paypal"></i>
                        </div>
                    </div>
                </div>
            </div>
      </footer>
      <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


       <!-- custom script -->
    <script src="js/script.js"></script>
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
 
  </body>
</html>