					<?php   
if(count($banners) > 0) { 
?>          
		  <div id="rev_slider_4_3_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery">

                <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
                <div id="rev_slider_4_3" class="rev_slider fullwidthabanner" data-version="5.3.0.2">
                    <div class="slotholder"></div>

                    <ul>

<!-- BANNER -->
<?php 

foreach ($banners as $banner):
 $thumbImageurl = 'images/banners/'.$banner['Banner']['image'];
$Imageurl = "http://www.placehold.it/1920x683/EFEFEF/AAAAAA&amp;text=no+image";
$Imageurl = ($banner['Banner']['image'] != '')?$thumbImageurl:$Imageurl;
$name= $banner['Banner']['name'];
$url= $banner['Banner']['page_url'];
 
?>
                        <!-- SLIDE  -->
                        <li data-index="rs-1" data-transition="slotzoom-horizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-delay="10010" data-rotate="0"
                            data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo $thumbImageurl; ?>" alt="" title="HomePage 2" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme" id="slide-1-layer-26" data-x="center" data-hoffset="" data-y="center" data-voffset="-170" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on" data-frames='[{"delay":250,"speed":800,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><img src="images/slides/slider-icon-001.png" alt="" data-ww="73px" data-hh="72px" width="73" height="72" data-no-retina></div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption head-font tp-resizeme" id="slide-1-layer-18" data-x="center" data-hoffset="" data-y="center" data-voffset="-95" data-fontsize="['28']" data-lineheight="['35']" data-fontweight="['400','400','400','400']" data-color="['#fd226a','#fd226a','#fd226a','#fd226a']"
                                data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-whitespace="nowrap">
                                Planwey Event Management Specialists</div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-shapewrapper tp-resizeme" id="slide-1-layer-22" data-x="center" data-hoffset="191" data-y="center" data-voffset="5" data-width="['430']" data-height="['22']" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":880,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-whitespace="nowrap"></div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme" id="slide-1-layer-19" data-x="center" data-hoffset="" data-y="center" data-voffset="-17" data-fontsize="['70']" data-lineheight="['85']" data-fontweight="['600','600','600','600']" data-color="['#fff','#fff','#fff','#fff']"
                                data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":800,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-whitespace="nowrap">Celebrate Your Events </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption tp-resizeme" id="slide-1-layer-20" data-x="center" data-hoffset="5" data-y="center" data-voffset="66" data-fontsize="['70']" data-lineheight="['85']" data-fontweight="['600','600','600','600']" data-color="['#fff','#fff','#fff','#fff']"
                                data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1190,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-whitespace="nowrap">That Lasts Longer </div>

                            <!-- LAYER NR. 6 -->
                            <a class="tp-caption highlight-skin-button tp-resizeme" href="#" target="_self" id="slide-1-layer-5" data-x="center" data-hoffset="-95" data-y="center" data-voffset="182" data-fontsize="['14','14','14','14']" data-lineheight="['15','15','15','15']" data-fontweight="['600','600','600','600']"
                                data-width="['auto']" data-height="['auto']" data-type="text" data-actions='' data-responsive_offset="on" data-frames='[{"delay":1390,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[15,15,15,10]" data-paddingright="[30,30,30,25]" data-paddingbottom="[15,15,15,10]" data-paddingleft="[30,30,30,25]" data-whitespace="nowrap">Get A Quote <span><i class="fa fa-angle-right"></i></span> </a>

                            <!-- LAYER NR. 7 -->
                            <a class="tp-caption tp-resizeme classic-border-button tp-resizeme" href="#" target="_self" id="slide-1-layer-21" data-x="center" data-hoffset="95" data-y="center" data-voffset="182" data-width="['auto']" data-height="['auto']" data-type="text" data-actions=''
                                data-responsive_offset="on" data-frames='[{"delay":1600,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(1,37,70);bg:rgb(255,255,255);"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[15,15,15,10]" data-paddingright="[30,30,30,25]" data-paddingbottom="[15,15,15,10]" data-paddingleft="[30,30,30,25]" data-whitespace="nowrap">View Services </a>
                        </li>
                        <!-- SLIDE  -->
                      <?php endforeach;?>
                    </ul>
                    <div class="tp-loader off">
                        <div class="dot1"></div>
                        <div class="dot2"></div>
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
			<?php }?>
			 </header>