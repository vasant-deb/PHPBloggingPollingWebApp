<style>
.wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  flex-direction: row;
  align-items: center;
  height: 100vh;
  margin-top: -30px;
}
.blog-content {
  padding: 25px;
  padding-top: 0px;
}
.blog-item {
    background-color: #FFF;
    flex: 0 0 30%;
    border-bottom: 5px solid #e7e7e7;
    box-shadow: 0px 10px 15px 5px #0000000f;
    border-radius: 25px;
    margin-top: 30px;
    cursor: pointer;
}
.blog-title {
  margin-bottom: 5px;
}
.blog-date {
  font-size: 1em;
  color: #898989;
}
.blog-image > img {
  width: 100%;
  border-top-left-radius: 25px;
  border-top-right-radius: 25px;
}
.btn {
    margin: 0 auto;
    display: block;
    width: 100%;
    padding: 15px;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 600;
    border-radius: 50px;
    border: none;
}
.btn-red {
    background: #FF416C;
    background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
    background: linear-gradient(to right, #FF4B2B, #FF416C);
    color: #FFF;
}
@media only screen and ( max-width:950px ){
  .blog-item {
    flex-basis: 100%;
  }
}</style>
<?php 
if(count($ourblogs) > 0) { 
?>
<div class="container">
<div class="wrapper">
<div class="col-md-12">
					<center> <h3 class="title">OUR BLOGS</h2></center></div>
<?php foreach($ourblogs as $blog): ?>
  <div class="blog-item">
    <div class="blog-image">
      <img src="images/blogs/<?php echo $blog['Blog']['image']; ?>">
    </div>
    <div class="blog-content">
      <h1 class="blog-title"><?php echo $blog['Blog']['name']; ?></h1>
      <span class="blog-date"><?php 
$ab=$blog['Blog']['created'];
$date = strtotime($ab);
echo date('M jS', $date); ?></span>
      <p class="blog-caption"><?php echo $blog['Blog']['short_description']; ?></p>
      <a  href="blogs/<?php echo $blog['Blog']['slug']; ?>.html" class="btn btn-red">Read More</a>
    </div>
  </div>
<?php endforeach;?>
<div class="clearfix"></div>
</div>
</div>
<?php } ?>