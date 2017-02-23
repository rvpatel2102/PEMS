/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App.controller("tabscontrol",function(empData){
    this.tab1=empData.tabfocus;
    
    this.tab1func=function(){
        this.tab1=empData.tabfocus;
        this.tab2=empData.nonfocus;    
        this.tab3=empData.nonfocus;
        
        empData.activetab="active";
    };
    this.tab2func=function(){
        this.tab1=empData.nonfocus;
        this.tab2=empData.tabfocus;    
        this.tab3=empData.nonfocus;
        
        empData.activetab="inactive";
    };
    this.tab3func=function(){
        this.tab1=empData.nonfocus;
        this.tab2=empData.nonfocus;    
        this.tab3=empData.tabfocus;
        
        empData.activetab="addemp";
    };
});


