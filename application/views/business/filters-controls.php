       <?php 
/// ----------------- Neighbors, Features
$selected_itemhead ="<strong><u>" ;
$selected_itemtail ="</u></strong>"; 
/// Sort list 
$bmS="" ;$bmS2=""; 
$mvS="" ;$mvS2=""; 
$hrS="" ;$hrS2=""; 
if( null != $this->input->get('srt' ) ) { 
       
    switch ( $this->input->get('srt' )) {
      case 'bm':
        $bmS="<strong><u>" ;$bmS2="</u></strong>"; 
        break;
      case 'mv':
        $mvS="<strong><u>" ;$mvS2="</u></strong>"; 
        break;
      case 'hr':
        $hrS="<strong><u>" ;$hrS2="</u></strong>"; 
        break;  
      }
    }
/// ----------------- Prices
$prc11="" ;$prc12=""; 
$prc21="" ;$prc22=""; 
$prc31="" ;$prc32=""; 
$prc41="" ;$prc42=""; 
 if( null != $this->input->get('srt' ) ) { 
        
    switch ( $this->input->get('prc' )) {
      case '1':
        $prc11="<strong><u>" ;$prc12="</u></strong>"; 
      break;
      case '2':
        $prc21="<strong><u>" ;$prc22="</u></strong>"; 
      break; 
      case '3':
        $prc31="<strong><u>" ;$prc32="</u></strong>"; 
      break;
      case '4':
        $prc41="<strong><u>" ;$prc42="</u></strong>"; 
      break;     
      }
  } 
?>

       
       
         <div class="jumbotron jumbotron-fluid" style="padding: 2rem 0;" id="filters">
       <div style="text-align: center">
        <div class="container" >
            <div class="row" >
                <div class="col-md-4">
                    <button type="button" class="btn     <?php if( null != $this->input->get('opn') ) echo 'btn-success';
                  else echo 'btn-outline-secondary'; ?> "
            id="opendBusinessBtn"><i class="fa fa-clock-o "></i>  Open Now</button>
                    <button type="button" class="btn btn-success" id="allfilterBtn"> 
                    	<i class="fa fa-sliders fa-rotate-90"></i> All Filters</button>
                </div>
                
              	<div id="filtersCard" class="col-md-8">
              		<div id="filtersCard" class="col-md-12">
              		 <div class="row" >
              		
                <div class="col-2">
                    <h6 class="font-weight-bold">SORT By :</h6>
                    <ul class="filterList">
                <li><a class="srtBy link-btn" id="bm" ><?php echo $bmS?> Best Match <?php echo $bmS2?></a></li>
              <!-- <li><a class="srtBy link-btn" id="hr" ><?=$hrS?>  Highest rated <?=$hrS2?> </a></li> -->
              <li><a class="srtBy link-btn" id="mv" ><?php echo $mvS?>  Most Viewed <?php echo $mvS2?> </a></li>
                        <!-- <li><a href="#">Best Match</a></li>
                        <li><a href="#">Highest rated</a></li>
                        <li><a href="#">Most Reviewed</a></li> -->
                    </ul>
                </div>
            	
                <div class="col-4">
                    <h6 class="font-weight-bold">NEIGHBORHOODS :</h6>
                   <ul> <?php foreach ($filters['NearestCities'] as   $value): ?>
                    	
                     <li><a class="ctyNearfltr link-btn" id="<?php echo $value->city_id?>">
                     	
                     
                      <?php if( null != $this->input->get('cty' )
                            && $value->city_id  == $this->input->get('cty' ) ) { 
                        echo $selected_itemhead ." "
                            .$value->city_english_name ." "
                            . $selected_itemtail;
                        }else {     
                          echo $value->city_english_name ; } ?>
                        </a>
                      </li>
                    <?php endforeach ?></ul>
                    <!-- <label class="checkmarkContainer">Mount
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="checkmarkContainer">Bayview
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label> -->
                </div>
                <div class="col-4">
                    <h6 class="font-weight-bold">FEATURES :</h6>
                    <div class=" text-left small row ">
				<?php foreach ($filters['GenFeats'] as $feature) { ?>
                     <div class="text-nowrap"><a class="featfltrs link-btn" id="<?=$feature->id?>">
                      <?php  if( null != $this->input->get('feat' )
                            && $feature->id  == $this->input->get('feat' ) ) { 
                       echo $selected_itemhead ." "
                            .$feature->name ." "
                            . $selected_itemtail;
                          }else{
                            echo $feature->name ;
                          } 
                      ?>
                      </a></div>  , 
                    <?php } ?>

					</div>
                </div>
                <div class="col-2">
                    <h6 class="font-weight-bold">PRICE :</h6>
                         <dd id='prices'>
                  <ul class=" text-left small">
                      <li><label>
                          <?php echo $prc11 ?>
                             <i><a class="pricfltr link-btn" id="1">$</a></i>
                          <?php echo $prc12 ?>
                          </label>
                      </li>
                      <li><label>
                        <?php echo $prc21 ?>
                             <i><a class="pricfltr link-btn" id="2">$$</a></i>
                        <?php echo $prc22 ?>
                          </label>
                      </li>
                      <li><label>
                        <?php echo $prc31 ?>
                             <i><a class="pricfltr link-btn" id="3">$$$</a></i>
                        <?php echo $prc32 ?>
                          </label>
                      </li>
                      <li><label>
                        <?php echo $prc41 ?>
                             <i><a class="pricfltr link-btn" id="4">$$$$</a></i>
                        <?php echo $prc42 ?>
                          </label>
                      </li>
                  </ul>
                </dd>
                </div>
            </div>
            </div>
            </div>
           </div>
       </div>
    </div>

<!-- 

<div id="filters" class="card bg-faded bg-light p-3">
    <dir class="row vdivide">
        <div class="col-sm-4 text-center list-inline">
            <button class="btn  
            <?php if( null != $this->input->get('opn') ) echo 'btn-success';
                  else echo 'btn-outline-secondary'; ?> "
            id="opendBusinessBtn"> 
                <i class="fa fa-clock-o "></i> OPEN NOW  
            </button>
            <button class="btn btn-success" id="">
                <i class="fa fa-sliders fa-rotate-90"></i> ALL FILTERS 
            </button>
        </div>
        <div id="" class="col-sm-8 text-center text-left row list-inline">
          <form id="fltr_form" class="col-sm-12 text-center text-left row list-inline">
            <dl class="col-2">
                <dt class="strong text-left">
                 SORT BY:  
                </dt>
                <dd> 
                  <ul class=" text-left small">
              <li><a class="srtBy link-btn" id="bm" ><?php echo $bmS ?> Best Match <?php echo $bmS2 ?></a></li>
              <!-- <li><a class="srtBy link-btn" id="hr" ><?=$hrS?>  Highest rated <?=$hrS2?> </a></li> -->
              <!-- <li><a class="srtBy link-btn" id="mv" ><?php echo $mvS?>  Most Viewed <?php echo $mvS2?> </a></li>
                  </ul>
                </dd>
            </dl>
            <dl class="col-sm-3">
                <dt class="strong text-left ">
                 NEIGHBORHOODS
                </dt>
                <dd> 
                  <ul class=" text-left small">
                    <?php foreach ($filters['NearestCities'] as   $value): ?>
                     <li><a class="ctyNearfltr link-btn" id="<?=$value->city_id?>">  
                      <?php if( null != $this->input->get('cty' )
                            && $value->city_id  == $this->input->get('cty' ) ) { 
                        echo $selected_itemhead ." "
                            .$value->city_english_name ." "
                            . $selected_itemtail;
                        }else {     
                          echo $value->city_english_name ; } ?>
                        </a>
                      </li>
                    <?php endforeach ?>
                  </ul>
                </dd>
            </dl>
            <?php ?>
            <dl class="col-4">
                <dt class="strong text-left">
                 FEATURES:
                </dt>
                <dd>
                  <div class=" text-left small row ">
                    <?php foreach ($filters['GenFeats'] as $feature) { ?>
                     <div class="text-nowrap"><a class="featfltrs link-btn" id="<?=$feature->id?>">
                      <?php  if( null != $this->input->get('feat' )
                            && $feature->id  == $this->input->get('feat' ) ) { 
                       echo $selected_itemhead ." "
                            .$feature->name ." "
                            . $selected_itemtail;
                          }else{
                            echo $feature->name ;
                          } 
                      ?>
                      </a></div>  , 
                    <?php } ?>
                    <!-- <div class="text-nowrap"><a class="flterInp link-btn" id="MR"><u> More.... </u></a></div>   -->
                    <!-- <div class="text-nowrap"><a class="flterInp link-btn" id="BM">Wheelchair Accessible </a></div>  ,  
                    <div class="text-nowrap"><a class="flterInp link-btn" id="HR">Kids Friendly  </a></div>  ,  
                    <div class="text-nowrap"><a class="flterInp link-btn" id="MR">Delivery </a></div>  ,  
                    <div class="text-nowrap"><a class="flterInp link-btn" id="MR">Parking </a></div>  ,  
                    <div class="text-nowrap"><a class="flterInp link-btn" id="MR">Wi-Fi </a></div>  ,  
                    <div class="text-nowrap"><a class="flterInp link-btn" id="MR">NO Smoking </a></div>  ,  
                    <div class="text-nowrap"><a class="flterInp link-btn" id="MR">Alcohol </a></div>  ,  
                    <div class="text-nowrap"><a class="flterInp link-btn" id="MR">Music </a></div>  ,  
                    --> 
                  <!-- </div>
                </dd>
            </dl>
             <dl class="col-3">
                <dt class="strong text-left text-nowrap">
                 PRICE:
                </dt>
                <dd id='prices'>
                  <ul class=" text-left small">
                      <li><label>
                          <?php echo $prc11 ?>
                             <i><a class="pricfltr link-btn" id="1">$</a></i>
                          <?php echo $prc12 ?>
                          </label>
                      </li>
                      <li><label>
                        <?php echo $prc21 ?>
                             <i><a class="pricfltr link-btn" id="2">$$</a></i>
                        <?php echo $prc22 ?>
                          </label>
                      </li>
                      <li><label>
                        <?php echo $prc31 ?>
                             <i><a class="pricfltr link-btn" id="3">$$$</a></i>
                        <?php echo $prc32 ?>
                          </label>
                      </li>
                      <li><label>
                        <?php echo $prc41 ?>
                             <i><a class="pricfltr link-btn" id="4">$$$$</a></i>
                        <?php echo $prc42 ?>
                          </label>
                      </li>
                  </ul>
                </dd>
            </dl>
        </form>
        </div>
</div> --> 
<script src="<?php echo base_url() . 'asset/js/find_fliter.js' ;?>"></script>