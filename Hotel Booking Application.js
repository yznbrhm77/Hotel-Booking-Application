(function($){
    function floatLabel(inputType){
        $(inputType).each(function(){
            var $yhis = $(this);

            // on focus add cladd active tp 
            
            $this.focus(function(){
                $this.next().addClass("active");
            }); 

            // on blur check field and remove class if needed

            $this.blur(function(){
                if($this.Val() === '' || $this.Val() === 'blank'){
                    $this.next().removaClass();
                }
            })
        })
    }

    // just add a class of "floatLabel to the input field!"

    floatLabel(".floatLabel")
})  (jQuery)