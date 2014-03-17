/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};


var resources = [
];
var symbols = {
"stage": {
   version: "1.0.0",
   minimumCompatibleVersion: "0.1.7",
   build: "1.0.0.185",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
         dom: [
         {
            id:'frankyT',
            type:'image',
            rect:['51px','183px','166px','163px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"frankyT.png",'0px','0px']
         },
         {
            id:'cassT',
            type:'image',
            rect:['550px','154px','161px','158px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"cassT.png",'0px','0px']
         },
         {
            id:'Cassaundra-Kaiser2_jaw',
            type:'image',
            rect:['598px','146px','61px','25px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"Cassaundra-Kaiser2_jaw.png",'0px','0px']
         },
         {
            id:'Cassaundra-Kaiser2',
            type:'image',
            rect:['582px','79px','89px','163px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"Cassaundra-Kaiser2.png",'0px','0px']
         },
         {
            id:'Francesco-Gisonni1_Jaw',
            type:'image',
            rect:['101px','172px','61px','31px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"Francesco-Gisonni1_Jaw.png",'0px','0px'],
            transform:[[],['0deg']]
         },
         {
            id:'Francesco-Gisonni1',
            type:'image',
            rect:['89px','111px','89px','79px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"Francesco-Gisonni1.png",'0px','0px'],
            transform:[[],['0deg']]
         },
         {
            id:'Ellipse2',
            type:'ellipse',
            rect:['107px','252px','20px','25px','auto','auto'],
            borderRadius:["50%","50%","50%","50%"],
            fill:["rgba(0,0,0,1.00)"],
            stroke:[0,"rgb(0, 0, 0)","none"]
         },
         {
            id:'Ellipse2Copy',
            type:'ellipse',
            rect:['142px','252px','20px','25px','auto','auto'],
            borderRadius:["50%","50%","50%","50%"],
            fill:["rgba(0,0,0,1.00)"],
            stroke:[0,"rgb(0, 0, 0)","none"]
         }],
         symbolInstances: [

         ]
      },
   states: {
      "Base State": {
         "${_frankyT}": [
            ["style", "top", '182.97px'],
            ["style", "height", '163.25px'],
            ["style", "left", '50.73px'],
            ["style", "width", '166.36030587963px']
         ],
         "${_Cassaundra-Kaiser2_jaw}": [
            ["style", "top", '145.89px'],
            ["style", "height", '24.734396119993px'],
            ["style", "left", '598px'],
            ["style", "width", '61.063037212689px']
         ],
         "${_Ellipse2Copy}": [
            ["style", "top", '252px'],
            ["style", "left", '142px'],
            ["color", "background-color", 'rgba(0,0,0,1)']
         ],
         "${_Francesco-Gisonni1}": [
            ["style", "top", '111.1px'],
            ["style", "height", '79.254965059894px'],
            ["style", "left", '89px'],
            ["style", "width", '89.441342731681px']
         ],
         "${_cassT}": [
            ["style", "left", '550px'],
            ["style", "top", '153.63px']
         ],
         "${_Cassaundra-Kaiser2}": [
            ["style", "top", '78.63px'],
            ["style", "height", '163.25805415312px'],
            ["style", "left", '582.02px'],
            ["style", "width", '89.441342731681px']
         ],
         "${_Ellipse2}": [
            ["style", "top", '252px'],
            ["style", "left", '106.87px'],
            ["color", "background-color", 'rgba(0,0,0,1.00)']
         ],
         "${_Stage}": [
            ["color", "background-color", 'rgba(255,255,255,1)'],
            ["style", "width", '550px'],
            ["style", "height", '400px'],
            ["style", "overflow", 'hidden']
         ],
         "${_Francesco-Gisonni1_Jaw}": [
            ["style", "top", '172.35px'],
            ["style", "height", '30.531518606345px'],
            ["style", "left", '101.45px'],
            ["style", "width", '61.063037212689px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 0,
         autoPlay: true,
         timeline: [
         ]
      }
   }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-883563");
