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
   version: "1.5.0",
   minimumCompatibleVersion: "1.5.0",
   build: "1.5.0.217",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
         dom: [
         {
            id:'boton1',
            type:'ellipse',
            rect:['295px','319px','23px','19px','auto','auto'],
            cursor:['pointer'],
            borderRadius:["50%","50%","50%","50%"],
            fill:["rgba(192,192,192,1)"],
            stroke:[0,"rgba(0,0,0,1)","none"]
         },
         {
            id:'boton2',
            type:'ellipse',
            rect:['324px','319px','23px','19px','auto','auto'],
            cursor:['pointer'],
            borderRadius:["50%","50%","50%","50%"],
            fill:["rgba(192,192,192,1)"],
            stroke:[0,"rgba(0,0,0,1)","none"]
         },
         {
            id:'boton3',
            type:'ellipse',
            rect:['351px','319px','23px','19px','auto','auto'],
            cursor:['pointer'],
            borderRadius:["50%","50%","50%","50%"],
            fill:["rgba(192,192,192,1)"],
            stroke:[0,"rgba(0,0,0,1)","none"]
         },
         {
            id:'boton4',
            type:'ellipse',
            rect:['382px','319px','23px','19px','auto','auto'],
            cursor:['pointer'],
            borderRadius:["50%","50%","50%","50%"],
            fill:["rgba(192,192,192,1)"],
            stroke:[0,"rgba(0,0,0,1)","none"]
         },
         {
            id:'img1Copy',
            type:'image',
            rect:['4px','0','690px','310px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"imagen3.png",'0px','0px']
         },
         {
            id:'img4',
            type:'image',
            rect:['0','0','690px','310px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"imagen1.png",'0px','0px']
         },
         {
            id:'img3',
            type:'image',
            rect:['2px','0','690px','310px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"imagen2.png",'0px','0px']
         },
         {
            id:'img2',
            type:'image',
            rect:['0','0','690px','310px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"imagen4.png",'0px','0px']
         },
         {
            id:'img1',
            type:'image',
            rect:['4px','0','690px','310px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"imagen3.png",'0px','0px']
         }],
         symbolInstances: [

         ]
      },
   states: {
      "Base State": {
         "${_boton3}": [
            ["style", "top", '319px'],
            ["style", "cursor", 'pointer'],
            ["style", "left", '351px'],
            ["style", "width", '23px']
         ],
         "${_img3}": [
            ["style", "height", '310px'],
            ["style", "opacity", '1'],
            ["style", "left", '2px'],
            ["style", "width", '690px']
         ],
         "${_boton1}": [
            ["style", "top", '319px'],
            ["style", "cursor", 'pointer'],
            ["style", "left", '295px'],
            ["style", "width", '23px']
         ],
         "${_img1Copy}": [
            ["style", "height", '310px'],
            ["style", "opacity", '1'],
            ["style", "left", '4px'],
            ["style", "width", '690px']
         ],
         "${_img4}": [
            ["style", "height", '310px'],
            ["style", "opacity", '1'],
            ["style", "width", '690px']
         ],
         "${_img2}": [
            ["style", "height", '310px'],
            ["style", "opacity", '1'],
            ["style", "width", '690px']
         ],
         "${_Stage}": [
            ["color", "background-color", 'rgba(27,116,30,1.00)'],
            ["style", "overflow", 'hidden'],
            ["style", "height", '350px'],
            ["style", "width", '700px']
         ],
         "${_boton4}": [
            ["style", "top", '319px'],
            ["style", "cursor", 'pointer'],
            ["style", "left", '382px'],
            ["style", "width", '23px']
         ],
         "${_img1}": [
            ["style", "height", '310px'],
            ["style", "opacity", '1'],
            ["style", "left", '4px'],
            ["style", "width", '690px']
         ],
         "${_boton2}": [
            ["style", "top", '319px'],
            ["style", "cursor", 'pointer'],
            ["style", "left", '324px'],
            ["style", "width", '23px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 20000,
         autoPlay: true,
         labels: {
            "imagen1": 0,
            "imagen2": 5000,
            "imagen3": 10000,
            "imagen4": 15000
         },
         timeline: [
            { id: "eid71", tween: [ "style", "${_img3}", "opacity", '0', { fromValue: '1'}], position: 10000, duration: 5000 },
            { id: "eid69", tween: [ "style", "${_img2}", "opacity", '0', { fromValue: '1'}], position: 5000, duration: 5000 },
            { id: "eid73", tween: [ "style", "${_img4}", "opacity", '0', { fromValue: '1'}], position: 15000, duration: 5000 },
            { id: "eid74", tween: [ "style", "${_img1Copy}", "opacity", '1', { fromValue: '1'}], position: 20000, duration: 0 },
            { id: "eid67", tween: [ "style", "${_img1}", "opacity", '0', { fromValue: '1'}], position: 0, duration: 5000 }         ]
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
})(jQuery, AdobeEdge, "EDGE-1509208");
