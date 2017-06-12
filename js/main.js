function loadTo(href,left){
   jQuery.ajax({
    url: href,
    dataTyp:"html"  
}).done(function(result) {
    if(left){
              target="#content2";
            }else{
                target="#rightbox2";    
            }
    start=result.indexOf("<!--content-->");
    end=result.indexOf("<!--eofcontent-->");
    if(start>0){
        if(end>start){            
                jQuery(target).html(result.substr(start+15, end-15-start   ));
                if(!left){
                  jQuery("#rightbox").addClass("yellow");
                }            
        }else{
            return false;                  
        }
    }else{
        return false;        
    }
    
  
});

}


function ShowMenu(){
    jQuery("div.menu").css("display","block");
    return false;
}


function isLocal(href){
    if(href.indexOf("zlin.cz")>0) return true;
    if(href.indexOf("j.ntm.cz")>0) return true;
    if(href.indexOf("localhost")>0) return true;
    return false;
}

jQuery(document).ready(function(){
   jQuery(".menu a").live('hover',function(e){       
        href=jQuery(this).attr('href');
        console.log(href);
        if( isLocal(href)){
            loadTo(href,false);
           return false;            
        }                   
    });
    
     jQuery(".menu a").live('click',function(e){       
        
           return false;            
                           
    });
});

function Unfade(id){
    jQuery("#overlay_"+id).fadeTo(30,0,function(){
        jQuery("#overlay_"+id).remove();
        jQuery("#content_"+id).css("margin-top",0);
        jQuery("#fade_"+id).animate(
                {
                height:"300px",
                
                 
                },250,function(){
        jQuery("#fade_"+id).replaceWith(jQuery("#content_"+id).html() );
                   jQuery("#hide_"+id).remove(); 
                }
                )
        
        
    });
    
}
