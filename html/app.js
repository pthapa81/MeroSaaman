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


$(document).ready(function(){
        $("#addform").click(function () {
            $("#content").fadeIn(1 );
        });

    });

function validate() {
            var decorator = document.getElementById('paper1');
            var input = document.getElementById('input1');
            decorator.isInvalid = !input.validity.valid;
        }



