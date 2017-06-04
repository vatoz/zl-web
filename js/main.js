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



jQuery(document).ready(function(){
    jQuery("#content a").live('click',function(e){       
        href=jQuery(this).attr('href');
        //todo kontrola že je lokální
        loadTo(href,true);
        return false;                   
    });
   jQuery("#rightbox a").live('click',function(e){       
        href=jQuery(this).attr('href');
        //todo kontrola že je lokální
        loadTo(href,false);
        return false;                   
    });
});
