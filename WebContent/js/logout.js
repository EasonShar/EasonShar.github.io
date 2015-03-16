$(function(){
        $('li#logout').click(function(){
            if(confirm('Are you sure to logout?')){
                return true;
            }
            return false;
        });
    });