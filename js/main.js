//Načte do pravého ČI LEVÉHO  bloku odkaz z lokálního webu, POKUD JE TO VPRAVO TAK PŘIDÁ TŘÍDU YELLOW
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


//zobrazí menu
function ShowMenu(){
    jQuery("div.menu").css("display","block");
    return false;
}

//zjišťuje, zda je odkaz místní (pro ostrou, vývojovou a lokální verzi)
function isLocal(href){
    if(href.indexOf("zlin.cz")>0) return true;
    if(href.indexOf("j.ntm.cz")>0) return true;
    if(href.indexOf("localhost")>0) return true;
    return false;
}

//po načtení dokumentu provede
jQuery(document).ready(function(){
   //pravé menu načte výstupy  
   jQuery(".menu a").live('click',function(e){       
        href=jQuery(this).attr('href');
        if( isLocal(href)){
           loadTo(href,false);
           return false;            
        }                   
    });
    
    //levé menu načte obsah a zmizí
    jQuery(".menu0 a").live('click',function(e){       
           hideMenu(); 
           return true;                                       
    });
    
    
});

//okamžitě skryje menu a po chvilce ho zase obnoví. takhel už nebudeme hover na něm
function hideMenu(){
    jQuery(".menu0 ul,  ul.menu").css("display","none");
    setTimeout(function()
    {    jQuery(".menu0 ul, ul.menu").css("display","block");},200);
}

//rozbalí blok číst dál.
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
                );
         
    });
    
}
