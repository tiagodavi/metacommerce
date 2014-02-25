// JavaScript Document
<!--//--><![CDATA[//><!--
$("html").addClass("js");
$(function() {
  $("#side").accordion({initShow : "#current"});
  $("#main").accordion({
      objID: "#acc1", 
      el: ".h", 
      head: "h4, h5", 
      next: "div", 
      initShow : "div.shown",
      standardExpansible : true,
	  oneOpenAtTime:false

  });
  $("#main").accordion({
      objID: "#acc2", 
      obj: "div", 
      wrapper: "div", 
      el: ".h", 
      head: "h4, h5", 
      next: "div", 
      initShow : "div.shown",
      standardExpansible : true,
    });
  //* ---
  $("#main .accordion").expandAll({
      trigger: ".h", 
      ref: "h4.h", 
      cllpsEl : "div.outer",
      speed: 200,
      oneSwitch : false,
      instantHide: true,
  });
  //--- */
  /* -----------------------  
  $("#side ul.accordion").expandAll({
      trigger: "li", 
      ref: "", 
      cllpsEl : "ul", 
      state : '',
      oneSwitch : false
  });
  ------------------------ */  
  $("html").removeClass("js");
});
//--><!]]>
<!--<![endif]-->