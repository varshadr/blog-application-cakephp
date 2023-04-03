<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">



    <title>blog item - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
        body {
            margin-top: 20px;
        }


        .content-item {
            padding: 30px 0;
            background-color: #FFFFFF;
        }

        .content-item.grey {
            background-color: #F0F0F0;
            padding: 50px 0;
            height: 100%;
        }

        .content-item h2 {
            font-weight: 700;
            font-size: 25px;
            line-height: 45px;
            text-transform: uppercase;
            margin: 20px 0;
        }

        .content-item h3 {
            font-weight: 400;
            font-size: 20px;
            color: #555555;
            margin: 10px 0 15px;
            padding: 0;
        }

        .content-headline {
            height: 1px;
            text-align: center;
            margin: 20px 0 70px;
        }

        .content-headline h2 {
            background-color: #FFFFFF;
            display: inline-block;
            margin: -20px auto 0;
            padding: 0 20px;
        }

        .grey .content-headline h2 {
            background-color: #F0F0F0;
        }

        .content-headline h3 {
            font-size: 14px;
            color: #AAAAAA;
            display: block;
        }

        /* BOXES */

        .box {
            background-color: #FFFFFF;
            padding: 10px 20px;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .box h3 {
            margin: 30px 0 5px;
            font-weight: bold;
        }

        .box ul {
            margin: 0;
        }

        .box ul li {
            font-size: 13px;
            border-bottom: 1px dashed #DDDDDD;
            padding: 10px 0;
            font-weight: 600;
        }

        .box ul li:last-child {
            border-bottom: 0;
        }

        .box ul li i {
            font-size: 18px;
            margin-right: 20px;
        }

        .box.categories ul li i {
            color: #BBBBBB;
            position: relative;
            top: 2px;
            width: 20px;
        }

        .posts ul li a {
            font-size: 11px;
            line-height: 23px;
        }

        .posts ul li a:hover {
            color: #333333;
        }

        .posts ul li div {
            font-size: 13px;
            color: #999999;
            font-weight: bold;
            text-align: right;
            margin-top: 5px;
        }

        .box.posts ul li i {
            color: #333333;
            font-size: 14px;
            margin-right: 10px;
        }

        .box.tags ul.blog-tags li {
            border: 0;
        }

        ul.blog-tags li {
            padding: 7px 0;
        }

        div ul.blog-tags li i,
        div .box.tags ul li i {
            color: #FFFFFF;
            position: relative;
            top: 1px;
            font-size: 14px;
        }

        .blog p img.pull-left {
            margin-right: 15px;
        }

        .blog p img {
            max-width: 300px;
            border: 3px solid #BBBBBB;
            padding: 5px;
        }
    </style>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <section class="content-item grey" id="blog-item">
        <div class="container">
            <div class="row">

                <div class="col-sm-8 blog">
                <?php foreach ($listBlogs as $value){ ?>
                    <h2><?php echo($value->title) ?></h2>
                    <ul class="blog-detail list-unstyled list-inline">
                        <li><i class="fa fa-calendar"></i>27/02/2014</li>
                        <li><i class="fa fa-clock-o"></i>19:41</li>
                        <li><i class="fa fa-user"></i>John Doe</li>
                        <li><i class="fa fa-comments"></i>124 Comments</li>
                    </ul>
                    <p><img class="img-responsive pull-left" src="https://www.bootdey.com/image/200x200/FFB6C1/000000" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis lacus ac semper viverra. Etiam consequat odio sollicitudin metus condimentum, quis hendrerit erat adipiscing. Cras non turpis ut eros varius laoreet a ut felis. Aliquam sodales, purus pulvinar tincidunt congue, elit mauris sodales nisl, consequat iaculis urna enim in lectus. Proin at ornare lacus. Curabitur sodales imperdiet ante, eget fermentum nulla consequat id. Vestibulum quis tellus ac lectus luctus varius nec sit amet nunc. Aliquam elit orci, semper vitae aliquet vel, ultrices nec sem. Morbi lorem ligula, tempus eu ultrices sit amet, varius id quam. Donec vestibulum arcu et augue porta, at mattis neque facilisis. Donec vulputate eu risus ut volutpat. Praesent vel rhoncus velit, quis vestibulum dui. Phasellus sodales sapien ligula, quis consequat diam tristique id. Donec vel rhoncus sem, id elementum quam. Aliquam erat volutpat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis lacus ac semper viverra. Etiam consequat odio sollicitudin metus condimentum, <a href="#">quis hendrerit</a> erat adipiscing. Cras non turpis ut eros varius laoreet a ut felis. Aliquam sodales, purus pulvinar tincidunt congue, elit mauris sodales nisl, consequat iaculis urna enim in lectus. Proin at ornare lacus. Curabitur sodales imperdiet ante, eget fermentum nulla consequat id. Vestibulum quis tellus ac lectus luctus varius nec sit amet nunc. Aliquam elit orci, semper vitae aliquet vel, ultrices nec sem.</p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>In venenatis lacus ac semper viverra</li>
                        <li>Etiam consequat odio sollicitudin metus condimentum</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, <b>consectetur adipiscing elit. In venenatis lacus ac semper viverra</b>. Etiam consequat odio sollicitudin metus condimentum, <i>quis hendrerit erat adipiscing</i>. Cras non turpis ut eros varius laoreet a ut felis. Aliquam sodales, purus pulvinar tincidunt congue, elit mauris sodales nisl, consequat iaculis urna enim in lectus. Proin at ornare lacus. Curabitur sodales imperdiet ante, eget fermentum nulla consequat id. Vestibulum quis tellus ac lectus luctus varius nec sit amet nunc. Aliquam elit orci, semper vitae aliquet vel, ultrices nec sem.</p>
                    <ul class="blog-tags list-unstyled list-inline">
                        <li><a href="#"><i class="fa fa-tag"></i>book</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>music</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>nature</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>read</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>songs</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>sunshine</a></li>
                    </ul>
                </div><?php } ?>


                <div class="col-sm-4">
                    <div class="sidebar">
                        <h3>Categories</h3>
                        <div class="box categories">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-female"></i>Fashion</a></li>
                                <li><a href="#"><i class="fa fa-paint-brush"></i>Design</a></li>
                                <li><a href="#"><i class="fa fa-music"></i>Music</a></li>
                                <li><a href="#"><i class="fa fa-plane"></i>Travel</a></li>
                                <li><a href="#"><i class="fa fa-hashtag"></i>Uncategorized</a></li>
                            </ul>
                        </div>
                        <h3>Recent Posts</h3>
                        <div class="box posts">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-chevron-right"></i><a href="#">Introducing WordPress 4.0 “Benny”</a>
                                    <div>27/02/2014</div>
                                </li>
                                <li><i class="fa fa-chevron-right"></i><a href="#">Nature Center: Earth Day Festival</a>
                                    <div>18/02/2014</div>
                                </li>
                                <li><i class="fa fa-chevron-right"></i><a href="#">Two New Stores Set to Open in Downtown</a>
                                    <div>05/02/2014</div>
                                </li>
                            </ul>
                        </div>
                        <h3>Tags</h3>
                        <div class="box tags">
                            <ul class="blog-tags list-unstyled list-inline">
                                <li><a href="#"><i class="fa fa-tag"></i>book</a></li>
                                <li><a href="#"><i class="fa fa-tag"></i>music</a></li>
                                <li><a href="#"><i class="fa fa-tag"></i>nature</a></li>
                                <li><a href="#"><i class="fa fa-tag"></i>read</a></li>
                                <li><a href="#"><i class="fa fa-tag"></i>songs</a></li>
                                <li><a href="#"><i class="fa fa-tag"></i>sunshine</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <script type="text/javascript">

    </script>
</body>

</html>