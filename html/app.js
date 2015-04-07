document.addEventListener('polymer-ready', function() {
  var navicon = document.getElementById('navicon');
  var drawerPanel = document.getElementById('drawerPanel');
  navicon.addEventListener('click', function() {
    drawerPanel.togglePanel();
  });
});

document.addEventListener('polymer-ready', function() {
  var navicon = document.getElementById('nav');
  var drawerPanel = document.getElementById('drawerPanel');
  navicon.addEventListener('click', function() {
    drawerPanel.togglePanel();
  });
});




function validate() {
            var decorator = document.getElementById('paper1');
            var input = document.getElementById('input1');
            decorator.isInvalid = !input.validity.valid;
        }

$(document).ready(function(){
        $("#newform").click(function () {
            $("#content2").hide();
            $("#content3").hide();
            $("#content4").hide();
            $("#content5").hide();
            $("#content").fadeIn(1 );

        });

    });

$(document).ready(function(){
        $("#request").click(function () {
            $("#content").hide();
            $("#content3").hide();
            $("#content4").hide();
            $("#content5").hide();
            $("#content2").fadeIn(1 );

        });

    });

$(document).ready(function(){
        $("#delivery").click(function () {
            $("#content").hide();
            $("#content2").hide();
            $("#content4").hide();
            $("#content5").hide();
            $("#content3").fadeIn(1 );

        });

    });

$(document).ready(function(){
        $("#myprofile").click(function () {
            $("#content").hide();
            $("#content2").hide();
            $("#content3").hide();
            $("#content5").hide();
            $("#content4").fadeIn(1 );

        });

    });

$(document).ready(function(){
        $("#newdelivery").click(function () {
            $("#content").hide();
            $("#content2").hide();
            $("#content3").hide();
            $("#content4").hide();
            $("#content5").fadeIn(1 );

        });

    });



window.addEventListener('polymer-ready', function(e) {
      var xFoo = document.querySelector('core-drawer');
      xFoo.barProperty = 'baz';
    });