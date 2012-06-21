
// Checks the browser and adds classes to the body to reflect it.

jQuery(document).ready(function(){

    var userAgent = navigator.userAgent.toLowerCase();
    jQuery.browser.chrome = /chrome/.test(navigator.userAgent.toLowerCase());

    // Is this a version of IE?
    if(jQuery.browser.msie){
        jQuery('body').addClass('browserIE');

        // Add the version number
        jQuery('body').addClass('browserIE' + jQuery.browser.version.substring(0,1));
    }
    
    
    // Is this a version of Chrome?
    if(jQuery.browser.chrome){
    
        jQuery('body').addClass('browserChrome');
        
        //Add the version number
        userAgent = userAgent.substring(userAgent.indexOf('chrome/') +7);
        userAgent = userAgent.substring(0,1);
        jQuery('body').addClass('browserChrome' + userAgent);
        
        // If it is chrome then jQuery thinks it's safari so we have to tell it it isn't
        jQuery.browser.safari = false;
    }
    
    // Is this a version of Safari?
    if(jQuery.browser.safari){
        jQuery('body').addClass('browserSafari');
        
        // Add the version number
        userAgent = userAgent.substring(userAgent.indexOf('version/') +8);
        userAgent = userAgent.substring(0,1);
        jQuery('body').addClass('browserSafari' + userAgent);
    }
    
    // Is this a version of Mozilla?
    if(jQuery.browser.mozilla){
        
        //Is it Firefox?
        if(navigator.userAgent.toLowerCase().indexOf('firefox') != -1){
            jQuery('body').addClass('browserFirefox');
            
            // Add the version number
            userAgent = userAgent.substring(userAgent.indexOf('firefox/') +8);
            userAgent = userAgent.substring(0,1);
            jQuery('body').addClass('browserFirefox' + userAgent);
        }
        // If not then it must be another Mozilla
        else{
            jQuery('body').addClass('browserMozilla');
        }
    }
    
    // Is this a version of Opera?
    if(jQuery.browser.opera){
        jQuery('body').addClass('browserOpera');
    }
    
    
});