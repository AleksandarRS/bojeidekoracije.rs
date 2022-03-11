'use strict';

$ = require('jquery');

const Navigation = require('./core/navigation');
const example = require('./site/example');
const slick = require('./site/slick');
const smoothscroll = require('./site/smoothscroll');
const backtotop = require('./site/backtotop');


jQuery( function(){

  /**
   * Initialize site navigation
   */
  Navigation.init();

   /**
   * Initialize slick module
   */
  slick.init();

  /**
   * Initialize smoothscroll module
   */
  smoothscroll.init();

  /**
  * Initialize backtotop module
  */
  backtotop.init();

  /**
   * Initialize sample module
   */
  example.init();

});