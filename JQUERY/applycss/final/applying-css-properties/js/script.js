$(document).ready(function() {
 
    // applying single css property
    $('#header').css('font-size', '30px');

    // applying multiples css properties
    $('#header').css(
        {
            'font-size': '30px',
            'color': 'orange',
            'text-transform': 'uppercase',
        }
    );

    $('.heading-primary').css(
        {
            'fontWeight': '100'
        }
    );

    $('.container').css(
        {
            'background-color': 'blue',
            'color': 'white',
            'padding': '5px'
        }
    );

    $('.post').css(
        {
            'background-color': 'grey',
            'padding': '10px',
            'margin': '10px'
        }
    );

    $('#footer').css(
        {
            'background-color': 'grey',
            'color': 'white',
            'padding': '5px'
        }
    );
    
});