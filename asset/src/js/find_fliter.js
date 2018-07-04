

    function init_load() {
      url  = window.location.href;
      url  = url.replace("#", "");
      if(   ! url.match("srt") ){
        setParamURLFilter('srt','mv');
        //window.location.href = window.location.href + "?srt=mv";
      }}
    function removeParam(key, sourceURL) {
      var rtn = sourceURL.split("?")[0],
          param,
          params_arr = [],
          queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
      if (queryString !== "") {
          params_arr = queryString.split("&");
          for (var i = params_arr.length - 1; i >= 0; i -= 1) {
              param = params_arr[i].split("=")[0];
              if (param === key) {
                  params_arr.splice(i, 1);
              }
          }
          rtn = rtn + "?" + params_arr.join("&");
            }
            return rtn;
      }
    function setParamURLFilter(flt, val){ 
          url  = window.location.href;
          url  = url.replace("#", "");
        if (url.match(/\?./)) { //.contains('?')) {
          params = url.split('?')[1];
          my_val = "&"+flt+"="+val;
          if(params.match(flt) &&  params.match(val))
          { // contain
            removeParamURLFilter(flt , url);
          }else if(params.match(flt) && ! params.match(my_val) ){
            new_url = removeParam(flt , url);
            window.location.href = new_url + my_val;
          }
          else{ // should add
          	url = window.location.href;
          	url  = url.replace("#", "");
            window.location.href = url + my_val;
          }
        }else{
        	url  = window.location.href;
          	url  = url.replace("#", "");
          window.location.href = url + "?"+flt+"="+val;
        } 
      }
    function removeParamURLFilter(flt) {
       window.location.href = removeParam(flt ,  window.location.href);
    }
    
    
    
     
$(document).ready(function()
{
	 $(".cat_name_cont").click(function (e) {
		val = $(e.target).html();
		$("#find_inp").val(val);
  	 	$("#find_res").css({'display':'none'});
  	 	setParamURLFilter('findcat',val +"" );
  	 	
	});
    $("#find_res , #find_get_res").css({'display':'none'});
    $("#find_res , #find_get_res , #city_res").css({  'position':'absolute' , 'z-index':'15'});
    $("#city_res").focusout( function(){
        $("#city_res").css({'display':'none'});
    });
    $("#find_inp").focus(function(){ //
        c= $("#find_inp").val();
        if(c == "")
            $("#find_res").toggle();
    }).focusout( function(){
        //$("#find_res").css({'display':'none'});
    } );
    $("#find_get_res").focusout( function(){
        $("#find_get_res").css({'display':'none'});
    } );
    $("#city_inp").keyup(function(e){
        city_input_change($("#city_inp").val());

    });
    $("#find_inp").keyup(function(e){
        find_input_change($("#find_inp").val());
    });
    
    //========= Search =============
    $("#go_find").click(function(){
        cty = $("#city_inp").val().replace(/\s/g, '') ;
        cat = $("#find_inp").val() ;
        if( cty == "" && checkParamURLFilter('cty') ){
            //console.log("CCC " + cty);
            removeParamURLFilter('cty');
        }else{
            //city_input_change(cty)
        }
        if( cat == "" && checkParamURLFilter('cat') ){
            removeParamURLFilter('findcat');
        }else{
            //find_input_change(cat)
        }
    });
});

    
   