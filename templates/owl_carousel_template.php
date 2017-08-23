<?php
$OWL_CAROUSEL_TEMPLATE['default']['start'] = '';
$OWL_CAROUSEL_TEMPLATE['default']['item'] = '											
                                                
                                                <div class="item">
                                                    <div class="team-item wow fadeInDown animated" data-wow-duration="1s" data-wow-delay="0.3s">
                                                        <div class="team-desc">
                                                            <div class="team-photo">                                                            
                                                                {CMENUIMAGE: h=200&class=img-circle}
                                                            </div>
                                                            <span class="team-name">{CMENUTITLE}</span> <span class="title">{CPAGEFIELD: name=position}</span>
                                                            <div class="team-text">
                                                                <p>{CMENUBODY}</p>
                                                            </div>
                                                            <div class="social-icon">
                                                                <a href="{CPAGEFIELD: name=facebook}"><i class="fa fa-facebook"></i></a> <a href="{CPAGEFIELD: name=twitter}"><i class="fa fa-twitter"></i></a> <a href="{CPAGEFIELD: name=linkedin}"><i class="fa fa-linkedin"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            ';
$OWL_CAROUSEL_TEMPLATE['default']['end'] = '</div></div>';

$OWL_CAROUSEL_TEMPLATE['staff']['start'] = '';
$OWL_CAROUSEL_TEMPLATE['staff']['item'] = '											
                                                
                                                <div class="item">
                                                    <div class="team-item wow fadeInDown animated" data-wow-duration="1s" data-wow-delay="0.3s">
                                                        <div class="team-desc">
                                                            <div class="team-photo">                                                            
                                                                {CMENUIMAGE: h=200&class=img-circle}
                                                            </div>
                                                            <span class="team-name">{CMENUTITLE}</span> <span class="title">{CPAGEFIELD: name=position}</span>
                                                            <div class="team-text">
                                                                <p>{CMENUBODY}</p>
                                                            </div>
                                                            <div class="social-icon">
                                                                <a href="{CPAGEFIELD: name=facebook}"><i class="fa fa-facebook"></i></a> <a href="{CPAGEFIELD: name=twitter}"><i class="fa fa-twitter"></i></a> <a href="{CPAGEFIELD: name=linkedin}"><i class="fa fa-linkedin"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            ';
$OWL_CAROUSEL_TEMPLATE['staff']['end'] = '</div></div>';



//Single Carousel
$OWL_CAROUSEL_TEMPLATE['single']['start'] = '';

$OWL_CAROUSEL_TEMPLATE['single']['item'] = '

                <div class="item">
                {CMENUIMAGE: h=1000&w=1920&class=itemBg}
                            <div class="owlContent">
                            <h1>{CMENUTITLE}</h1><p>{CMENUBODY}</p></div>
                </div>
			
        
                                            
                                            ';
$OWL_CAROUSEL_TEMPLATE['single']['end'] = '</div></div>';