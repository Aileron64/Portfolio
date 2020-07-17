
// Links.
var $nav = $('#nav');
var $nav_a = $nav.find('a');

$nav_a.scrolly(
{
    speed: 1000,
    offset: function() { return $nav.height(); }
})
.on('click', function() 
{
    var $this = $(this);

    // External link? Bail.
    if ($this.attr('href').charAt(0) != '#')
        return;

    // Deactivate all links.
    $nav_a
        .removeClass('active')
        .removeClass('active-locked');

    // Activate link *and* lock it (so Scrollex doesn't try to activate other links as we're scrolling to this one's section).
    $this
        .addClass('active')
        .addClass('active-locked');
});