function loadTo(href,right){
   jQuery.ajax({
    url: href,
    dataTyp:"html"  
}).done(function(result) {
    if(right){
              target="#rightcontent";
            }else{
                target="#leftcontent";    
            }
    start=result.indexOf("<!--leftcontent-->");
    end=result.indexOf("<!--eofleftcontent-->");
    if(start>0){
        if(end>start){            
                jQuery(target).html(result.substr(start+19, end-19-start   ));            
        }else{
            return false;                  
        }
    }else{
        return false;        
    }
    
  
});

}


function isLocal(href){
    console.log(href);
    if(href.indexOf("zlin.cz")>0) return true;
    if(href.indexOf("j.ntm.cz")>0) return true;
    if(href.indexOf("localhost")>0) return true;
    return false;
}

jQuery(document).ready(function(){
    jQuery("#content a").live('click',function(e){       
        href=jQuery(this).attr('href');        
        if( isLocal(href)){
            loadTo(href,true);
            return false;            
        }                   
    });
   jQuery("#rightbox a,.menu a").live('click',function(e){       
        href=jQuery(this).attr('href');
        if( isLocal(href)){
            loadTo(href,false);
            return false;            
        }                   
    });
});
