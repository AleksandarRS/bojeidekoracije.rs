'use strict';

$ = require('jquery');

const Navigation = require('./core/navigation');
const example = require('./site/example');
const toggle = require('./site/toggle');
const slick = require('./site/slick');
const smoothscroll = require('./site/smoothscroll');
const featherlight = require('./site/featherlight');
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
   * Initialize toggle module
   */
  toggle.init();

  /**
   * Initialize smoothscroll module
   */
  smoothscroll.init();

  /**
   * Initialize featherlight module
   */
  featherlight.init();

  /**
  * Initialize backtotop module
  */
  backtotop.init();

  /**
   * Initialize sample module
   */
  example.init();

});