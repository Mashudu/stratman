<link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">

<script src="https://cdn.zingchart.com/zingchart.min.js"></script>

  <div id="myChart"></div>
  <script>
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
    zingchart.MODULESDIR = 'https://cdn.zingchart.com/modules/';
var ourOwn =   "{!! $description !!}";
    var myConfig = {
      type: 'wordcloud',
      options: {
        text:ourOwn,
        minLength: 5,
        ignore: ["America", "American", "Applause", "Because", "because", "could", "don’t", "people", "That’s", "that’s", "Their", "their", "there", "these", "thing", "those", "through", "We’re", "we’re", "where", "would"],
        maxItems: 40,
        aspect: 'flow-center',

        colorType: 'palette',
        palette: ['#D32F2F', '#5D4037', '#1976D2', '#E53935', '#6D4C41', '#1E88E5', '#F44336', '#795548', '#2196F3', '#EF5350', '#8D6E63', '#42A5F5'],

        style: {
          fontFamily: 'Crete Round',

          hoverState: {
            backgroundColor: '#D32F2F',
            borderRadius: 2,
            fontColor: 'white'
          },
          tooltip: {
            text: '%text: %hits',
            visible: true,
            alpha: 0.9,
            backgroundColor: '#1976D2',
            borderRadius: 2,
            borderColor: 'none',
            fontColor: 'white',
            fontFamily: 'Georgia',
            textAlpha: 1
          }
        }
      },

      source: {
        text: 'Strat Manager',
        //Source: https://obamawhitehouse.archives.gov/the-press-office/2015/03/07/remarks-president-50th-anniversary-selma-montgomery-marches
        fontColor: '#64B5F6',
        fontSize: 10,
        fontFamily: 'Georgia',
        fontWeight: 'normal',
        marginBottom: '10%'
      }
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: 400,
      width: '100%'
    });
  </script>