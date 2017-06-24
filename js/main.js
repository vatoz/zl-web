//Načte do pravého ČI LEVÉHO  bloku odkaz z lokálního webu, POKUD JE TO VPRAVO TAK PŘIDÁ TŘÍDU YELLOW
function loadTo(href,left){
    console.log("loadTo "+ href);
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
   //pravé menu načte výstupy, ovšem pokud pravý blok neexistuje tak jen přejde na novou stránku  
   jQuery(".menu a").live('click',function(e){       
        if(jQuery("#rightbox").length>0){
            href=jQuery(this).attr('href');
        if( isLocal(href)){
           loadTo(href,false);
           location.hash=href;
           return false;            
        }
        }else{
        return true;
        
    } 
                          
    });
    
    //levé menu načte obsah a zmizí
    jQuery(".menu0 a").live('click',function(e){       
           hideMenu(); 
           return true;                                       
    });
    
    if(jQuery("#rightbox").length>0){
        //pravý blok existuje
    }else{
        //pravý blok neexistuje
        jQuery("#content").css("width","99%");    
    }

    if(isLocal(location.hash.substr(1))){
        console.log("islocal hash" + location.hash.substr(1));
        loadTo(location.hash.substr(1), false);
    }
    
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
