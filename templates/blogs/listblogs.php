<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>blog list page - Bootdey.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style type="text/css">
  body {
    margin-top: 20px;
  }

  .blog-listing {
    padding-top: 30px;
    padding-bottom: 30px;
  }

  .gray-bg {
    background-color: #f5f5f5;
  }

  /* Blog 
  ---------------------*/
  .blog-grid {
    box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
    border-radius: 5px;
    overflow: hidden;
    background: #ffffff;
    margin-top: 15px;
    margin-bottom: 15px;
  }

  .blog-grid .blog-img {
    position: relative;
  }

  .blog-grid .blog-img .date {
    position: absolute;
    background: #fc5356;
    color: #ffffff;
    padding: 8px 15px;
    left: 10px;
    top: 10px;
    border-radius: 4px;
  }

  .blog-grid .blog-img .date span {
    font-size: 22px;
    display: block;
    line-height: 22px;
    font-weight: 700;
  }

  .blog-grid .blog-img .date label {
    font-size: 14px;
    margin: 0;
  }

  .blog-grid .blog-info {
    padding: 20px;
  }

  .blog-grid .blog-info h5 {
    font-size: 22px;
    font-weight: 700;
    margin: 0 0 10px;
  }

  .blog-grid .blog-info h5 a {
    color: #20247b;
  }

  .blog-grid .blog-info p {
    margin: 0;
  }

  .blog-grid .blog-info .btn-bar {
    margin-top: 20px;
  }


  /* Blog Sidebar
  -------------------*/
  .blog-aside .widget {
    box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
    border-radius: 5px;
    overflow: hidden;
    background: #ffffff;
    margin-top: 15px;
    margin-bottom: 15px;
    width: 100%;
    display: inline-block;
    vertical-align: top;
  }

  .blog-aside .widget-body {
    padding: 15px;
  }

  .blog-aside .widget-title {
    padding: 15px;
    border-bottom: 1px solid #eee;
  }

  .blog-aside .widget-title h3 {
    font-size: 20px;
    font-weight: 700;
    color: #fc5356;
    margin: 0;
  }

  .blog-aside .widget-author .media {
    margin-bottom: 15px;
  }

  .blog-aside .widget-author p {
    font-size: 16px;
    margin: 0;
  }

  .blog-aside .widget-author .avatar {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    overflow: hidden;
  }

  .blog-aside .widget-author h6 {
    font-weight: 600;
    color: #20247b;
    font-size: 22px;
    margin: 0;
    padding-left: 20px;
  }

  .blog-aside .post-aside {
    margin-bottom: 15px;
  }

  .blog-aside .post-aside .post-aside-title h5 {
    margin: 0;
  }

  .blog-aside .post-aside .post-aside-title a {
    font-size: 18px;
    color: #20247b;
    font-weight: 600;
  }

  .blog-aside .post-aside .post-aside-meta {
    padding-bottom: 10px;
  }

  .blog-aside .post-aside .post-aside-meta a {
    color: #6F8BA4;
    font-size: 12px;
    text-transform: uppercase;
    display: inline-block;
    margin-right: 10px;
  }

  .blog-aside .latest-post-aside+.latest-post-aside {
    border-top: 1px solid #eee;
    padding-top: 15px;
    margin-top: 15px;
  }

  .blog-aside .latest-post-aside .lpa-right {
    width: 90px;
  }

  .blog-aside .latest-post-aside .lpa-right img {
    border-radius: 3px;
  }

  .blog-aside .latest-post-aside .lpa-left {
    padding-right: 15px;
  }

  .blog-aside .latest-post-aside .lpa-title h5 {
    margin: 0;
    font-size: 15px;
  }

  .blog-aside .latest-post-aside .lpa-title a {
    color: #20247b;
    font-weight: 600;
  }

  .blog-aside .latest-post-aside .lpa-meta a {
    color: #6F8BA4;
    font-size: 12px;
    text-transform: uppercase;
    display: inline-block;
    margin-right: 10px;
  }

  .tag-cloud a {
    padding: 4px 15px;
    font-size: 13px;
    color: #ffffff;
    background: #20247b;
    border-radius: 3px;
    margin-right: 4px;
    margin-bottom: 4px;
  }

  .tag-cloud a:hover {
    background: #fc5356;
  }

  .blog-single {
    padding-top: 30px;
    padding-bottom: 30px;
  }

  .article {
    box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
    border-radius: 5px;
    overflow: hidden;
    background: #ffffff;
    padding: 15px;
    margin: 15px 0 30px;
  }

  .article .article-title {
    padding: 15px 0 20px;
  }

  .article .article-title h6 {
    font-size: 14px;
    font-weight: 700;
    margin-bottom: 20px;
  }

  .article .article-title h6 a {
    text-transform: uppercase;
    color: #fc5356;
    border-bottom: 1px solid #fc5356;
  }

  .article .article-title h2 {
    color: #20247b;
    font-weight: 600;
  }

  .article .article-title .media {
    padding-top: 15px;
    border-bottom: 1px dashed #ddd;
    padding-bottom: 20px;
  }

  .article .article-title .media .avatar {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    overflow: hidden;
  }

  .article .article-title .media .media-body {
    padding-left: 8px;
  }

  .article .article-title .media .media-body label {
    font-weight: 600;
    color: #fc5356;
    margin: 0;
  }

  .article .article-title .media .media-body span {
    display: block;
    font-size: 12px;
  }

  .article .article-content h1,
  .article .article-content h2,
  .article .article-content h3,
  .article .article-content h4,
  .article .article-content h5,
  .article .article-content h6 {
    color: #20247b;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .article .article-content blockquote {
    max-width: 600px;
    padding: 15px 0 30px 0;
    margin: 0;
  }

  .article .article-content blockquote p {
    font-size: 20px;
    font-weight: 500;
    color: #fc5356;
    margin: 0;
  }

  .article .article-content blockquote .blockquote-footer {
    color: #20247b;
    font-size: 16px;
  }

  .article .article-content blockquote .blockquote-footer cite {
    font-weight: 600;
  }

  .article .tag-cloud {
    padding-top: 10px;
  }

  .article-comment {
    box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
    border-radius: 5px;
    overflow: hidden;
    background: #ffffff;
    padding: 20px;
  }

  .article-comment h4 {
    color: #20247b;
    font-weight: 700;
    margin-bottom: 25px;
    font-size: 22px;
  }

  img {
    max-width: 100%;
  }

  img {
    vertical-align: middle;
    border-style: none;
  }
</style>

<body>
  <section class="blog-listing gray-bg">
    <div class="container">
      <div class="row align-items-start">
        <div class="col-lg-8 m-15px-tb">
          <div class="row">
            <?php foreach ($listall as $value){ ?>
            <div class="col-sm-6">
              <div class="blog-grid">
                <div class="blog-img">
                  <div class="date">
                    <span>04</span>
                    <label>FEB</label>
                  </div>
                  <a href="#">
                    <img src="https://www.bootdey.com/image/400x200/FFB6C1/000000" title="" alt="">
                  </a>
                </div>
                <div class="blog-info">
                  <h5><a href="#"> <?php echo($value->title) ?> </a></h5>
                  <p><?php echo($value->content) ?></p>
                  <div class="btn-bar">
                    <a href="#" class="px-btn-arrow">
                      <span> <a href="/blogs/viewblog?blogid=<?php echo($value->id);?>" >Read More</a></span>
                      <i class="arrow"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            
          </div>
        </div>
        <div class="col-lg-4 m-15px-tb blog-aside">
          <div class="widget widget-author">
            <div class="widget-title">
              <h3>Author</h3>
            </div>
            <div class="widget-body">
              <div class="media align-items-center">
                <div class="avatar">
                  <img src="https://bootdey.com/img/Content/avatar/avatar6.png" title="" alt="">
                </div>
                <div class="media-body">
                  <h6>Hello, I'm<br> Rachel Roth</h6>
                </div>
              </div>
              <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern
                websites, web services and online stores</p>
            </div>
          </div>


          <div class="widget widget-post">
            <div class="widget-title">
              <h3>Trending Now</h3>
            </div>
            <div class="widget-body">
            </div>
          </div>


          <div class="widget widget-latest-post">
            <div class="widget-title">
              <h3>Latest Post</h3>
            </div>
            <div class="widget-body">
            <?php foreach ($listall as $value){ ?>
              <div class="latest-post-aside media">
                <div class="lpa-left media-body">
                  <div class="lpa-title">
                    <h5><a href="#"></a><?php echo($value->title) ?> </h5>
                  </div>
                  <div class="lpa-meta">
                    <a class="name" href="#">
                      Rachel Roth
                    </a>
                    <a class="date" href="#">
                      26 FEB 2020
                    </a>
                  </div>
                </div>
                <div class="lpa-right">
                  <a href="#">
                    <img src="https://www.bootdey.com/image/400x200/E6E6FA/000000" title="" alt="">
                  </a>
                </div>
              </div>
              <?php } ?>
              
            </div>
          </div>


          <div class="widget widget-tags">
            <div class="widget-title">
              <h3>Latest Tags</h3>
            </div>
            <div class="widget-body">
              <div class="nav tag-cloud">
                <a href="#">Design</a>
                <a href="#">Development</a>
                <a href="#">Travel</a>
                <a href="#">Web Design</a>
                <a href="#">Marketing</a>
                <a href="#">Research</a>
                <a href="#">Managment</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</body>

</html>