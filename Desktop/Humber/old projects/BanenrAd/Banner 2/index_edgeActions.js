/***********************
* Adobe Edge Animate Composition Actions
*
* Edit this file with caution, being careful to preserve 
* function signatures and comments starting with 'Edge' to maintain the 
* ability to interact with these actions from within Adobe Edge Animate
*
***********************/
(function($, Edge, compId){
var Composition = Edge.Composition, Symbol = Edge.Symbol; // aliases for commonly used Edge classes

   //Edge symbol: 'stage'
   (function(symbolName) {
      
      
      

      Symbol.bindElementAction(compId, symbolName, "${_Stage}", "touchmove", function(sym, e) {
         
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Stage}", "mouseenter", function(sym, e) {

      });
      //Edge binding end

      

      Symbol.bindElementAction(compId, symbolName, "${_Rectangle}", "mouseover", function(sym, e) {
         
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Rectangle}", "click", function(sym, e) {
         // play the timeline from the given position (ms or label)
         sym.play(2052);
         
         

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1943, function(sym, e) {
         
         sym.stop();
         

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 2750, function(sym, e) {
         sym.stop();
         sym.$("Rectangle").css({cursor: 'default'})
         
         sym.$('Rectangle2').css ({cursor: 'pointer'})
         // insert code here

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Rectangle2}", "click", function(sym, e) {
         sym.play(2804);
         // stop the timeline at the given position (ms or label)
         
         
         // insert code for mouse click here

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 2804, function(sym, e) {
         sym.$("Rectangle2").css({cursor: "pointer"})
         sym.$("Rectangle").hide();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 2000, function(sym, e) {
         // insert code here
         sym.$("Rectangle").css({cursor: 'pointer'})
         sym.$("Rectangle").anitmate({opacity: 1})

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 3750, function(sym, e) {
         // insert code here
         sym.stop();
         sym.$('Rectangle2').css({cursor: 'default'})

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Rectangle6}", "click", function(sym, e) {
         sym.play(3750)

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 5060, function(sym, e) {
         sym.stop();
         // insert code here

      });
      //Edge binding end

   })("stage");
   //Edge symbol end:'stage'

})(jQuery, AdobeEdge, "EDGE-788812");