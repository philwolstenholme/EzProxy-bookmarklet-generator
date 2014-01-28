function generateLink() {
	var data = $("input").val();
	$( ".advice.text" ).addClass( "textglow" );
	$( ".bookmarklet" ).attr( "href", "javascript:void(location.href=%22" + data + "/login?url=%22+location.href);" ).removeClass( "disabled" ).addClass( "glow" );
}

$(function() {
    $( "form" ).on( "submit", function(e) {
        e.preventDefault();  
        generateLink();
    });
    $( "#submit" ).on( "click", function(e) {
        e.preventDefault();  
        generateLink();
    });
});