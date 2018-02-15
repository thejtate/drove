(function ($) {

  if (typeof Drupal != 'undefined') {
    Drupal.behaviors.drovnew = {
      attach: function (context, settings) {
        init();
      },

      completedCallback: function () {
        // Do nothing. But it's here in case other modules/themes want to override it.
      }
    }
  }

  $(function () {
    if (typeof Drupal == 'undefined') {
      init();
    }
  });

  $(window).load(function () {
    initElmsAnimation();
  });

  function init() {
    initMobileNav();
    initPlay();
    initModal();
    initChart();
    initTeam();
    initColumnizer();
    initPersonCollapsed();
    initSelect();
  }

  function initSelect() {
    $('select').select2({
      minimumResultsForSearch: Infinity
    });
  }

  function initPersonCollapsed() {
    var $wrapper = $('.section-person'),
      $btn = $wrapper.find('.btn-accordion'),
      $text = $wrapper.find('.text');

    $text.hide();

    var $wrapperHeightMin = $wrapper.height();

    $text.show();

    if ($(window).outerWidth() < 767) {
      $wrapper.height(290 + $('.col.col-1').height());
    } else {
      $wrapper.height($('.col.col-1').height() + 80);
    }

    $btn.on('click touch', function (e) {
      e.preventDefault();

      var $this = $(this),
        $parentWrapper = $this.closest('.section-person'),
        contentHeight = $this.closest('.container').height();

      if ($parentWrapper.hasClass('active')) {
        $parentWrapper.removeClass('active');
        $parentWrapper.height($wrapperHeightMin);
      } else {
        $parentWrapper.addClass('active');

        if (contentHeight < 650) {
          $parentWrapper.height(650);
        } else {
          $parentWrapper.height(contentHeight + 50);
        }
      }
    })
  }

  function initTeam() {
    var $wrapper = $('.section-team .items.style-a'),
      $btn = $wrapper.find('.read-more'),
      $item = $wrapper.find('.item');

    $btn.on('click touch', function (e) {
      e.preventDefault();

      var $this = $(this);

      if ($(this).closest('.item').hasClass('active')) {
        $item.removeClass('active');
      } else {
        $item.removeClass('active');
        $(this).closest('.item').addClass('active');
      }
    })
  }

  function initModal() {
    var $wrapper = $('.not-logged-in #site-header .top-menu'),
      $btns = $wrapper.find(' ul.menu a'),
      $btnLogin = $wrapper.find('.btn-login');

    if (!$btns.length) return;

    $btnLogin.on('click touch', function (e) {
      e.preventDefault();
      $('.region-login-popup').addClass('active');
    });

    $('.region-login-popup .close').on('click touch', function (e) {
      $('.region-login-popup').removeClass('active');
    });

    $btns.on('click touch', function (e) {
      e.preventDefault();
      $('#topmenu-modal').modal();
    });

    //
    //var $modal = $('.modal');
    //
    //$modal.on('show.bs.modal', function () {
    //  var $this = $(this);
    //
    //  $this.find('.form-submit').on('click touch', function (e) {
    //    e.preventDefault();
    //
    //    $this.addClass('modal-error');
    //  });
    //});
    //
    //$modal.on('hidden.bs.modal', function (e) {
    //  var $this = $(this);
    //
    //  $this.removeClass('modal-error');
    //});
  }

  function initMobileNav() {
    var $btn = $('.btn-nav');

    $btn.on('click touch', function (e) {
      e.preventDefault();

      $('body').toggleClass('mobile-nav-active');
    })
  }

  function initColumnizer() {
    $('.columnizer .text').columnize({columns: 2});
  }

  function initChart() {
    var wrapper = document.querySelector('.section-desc .media');

    if (!wrapper) return;

    linearCharts();

    function linearCharts() {
      var charts = [
        {
          id: '#chart',
          xAxis: ['TIME'],
          yAxis: [90, 95, 100, 105, 110],
          elms: [
            {
              title: '',
              position: [
                {
                  x: 0,
                  y: 40
                },
                {
                  x: 1,
                  y: 44
                },
                {
                  x: 10,
                  y: 48
                },
                {
                  x: 20,
                  y: 58
                },
                {
                  x: 30,
                  y: 47
                },
                {
                  x: 40,
                  y: 67
                },
                {
                  x: 50,
                  y: 52
                },
                {
                  x: 60,
                  y: 46
                },
                {
                  x: 70,
                  y: 51
                },
                {
                  x: 80,
                  y: 47
                },
                {
                  x: 90,
                  y: 61
                },
                {
                  x: 100,
                  y: 51
                },
                {
                  x: 110,
                  y: 57
                },
                {
                  x: 120,
                  y: 57
                },
                {
                  x: 130,
                  y: 64
                },
                {
                  x: 140,
                  y: 61
                },
                {
                  x: 150,
                  y: 64
                },
                {
                  x: 160,
                  y: 55
                },
                {
                  x: 170,
                  y: 57
                },
                {
                  x: 170,
                  y: 40
                }
              ],
              speed: 1000,
              color: '#c9c9c9',
              stroke: 1,
              fill: 'url(#pattern)',
              dotRadius: 0,
              dotStroke: 0,
              dotColor: '',
              dotFill: ''
            }, {
              title: '',
              position: [
                {
                  x: 0,
                  y: 40,
                  dotVisibility: 'hidden'
                },
                {
                  x: 30,
                  y: 40
                },
                {
                  x: 60,
                  y: 40
                },
                {
                  x: 90,
                  y: 40
                },
                {
                  x: 120,
                  y: 40
                },
                {
                  x: 150,
                  y: 40
                },
                {
                  x: 170,
                  y: 40,
                  dotVisibility: 'hidden'
                }
              ],
              speed: 1000,
              color: '#c9c9c9',
              stroke: 1,
              fill: 'transparent',
              dotRadius: 10,
              dotStroke: 5,
              dotColor: '#1176c0',
              dotFill: 'transparent'
            }
          ]
        }
      ];

      function LinearChart(el) {
        this.el = el;
        this.margin = {top: 10, right: 10, bottom: 38, left: 52};
        this.width = 860 - this.margin.left - this.margin.right;
        this.height = 400 - this.margin.top - this.margin.bottom;
        this.elmsLength = el.elms.length;
        this.wrapper = document.querySelector(el.id);

        this.init();
      }

      LinearChart.prototype.init = function () {
        var self = this;

        var svg = this.createSvg();
        this.svg = svg.svg;
        this.xScale = svg.xScale;
        this.yScale = svg.yScale;
        this.createAxis();

        var lines = [];

        for (var i = 0; i < this.elmsLength; i++) {
          lines.push(self.createLine(this.el.elms[i], i));
        }

        window.addEventListener('scroll', function () {
          self.animate(lines);
        });
        window.addEventListener('resize', function () {
          self.animate(lines);
        });
        setTimeout(function () {
          self.animate(lines);
        }, 50);
      };

      LinearChart.prototype.createSvg = function () {
        var svg = d3.select(this.el.id).append("svg")
          .attr("width", this.width + this.margin.left + this.margin.right)
          .attr("height", this.height + this.margin.top + this.margin.bottom);

        var defs = svg.append("defs")
          .append("pattern")
          .attr("id", "pattern")
          .attr("width", 6)
          .attr("height", 10)
          .attr("patternUnits", "userSpaceOnUse")
          .attr("patternTransform", "rotate(40 50 50)");

        defs.append("line")
          .attr("y2", "10")
          .attr("stroke", "#ffffff")
          .attr("stroke-width", "20px");

        defs.append("line")
          .attr("y2", "10")
          .attr("stroke", "#585858")
          .attr("stroke-width", "1px");

        var g = svg.append("g")
          .attr("transform", "translate(" + this.margin.left + "," + this.margin.top + ")");

        var xScale = d3.scale.linear()
          .range([0, this.width])
          .domain([0, 170]);

        var yScale = d3.scale.linear()
          .range([this.height, 0])
          .domain([0, 80]);

        return {
          svg: g,
          xScale: xScale,
          yScale: yScale
        };
      };

      LinearChart.prototype.createAxis = function () {
        var xLength = this.el.xAxis.length;
        var yLength = this.el.yAxis.length;
        var position = 'start';

        var xAxis = this.svg.append("g")
          .attr("class", "x axis")
          .attr("transform", "translate(0," + (this.height + this.margin.bottom) + ")");

        for (var i = 0; i < xLength; i++) {
          if (i == xLength - 1) {
            position = "end";
          } else if (i > 0 && i !== xLength - 1) {
            position = "middle";
          }

          xAxis.append("g")
            .attr("class", "tick")
            .attr("transform", "translate(" + this.width / 2 + ", 0)")
            .append("text")
            .attr("style", "text-anchor: " + position + ";")
            .text(this.el.xAxis[i]);
        }

        var yAxis = this.svg.append("g")
          .attr("class", "y axis");

        for (var y = 0; y < yLength; y++) {
          var yAxisG = yAxis.append("g")
            .attr("class", "tick")
            .attr("transform", "translate(0, " + (this.height - y * this.height / (yLength - 1)) + ")");

          yAxisG.append("text")
            .attr("x", -20)
            .attr("y", 3)
            .attr("style", "text-anchor: end; " + (y == 2 ? "font-size: 18px; fill: #5c5c61;" : ''))
            .text(this.el.yAxis[y]);
        }
      };

      LinearChart.prototype.createLine = function (el, index) {
        var self = this;

        var line = d3.svg.line()
          .x(function (d) {
            return self.xScale(d.x);
          })
          .y(function (d) {
            return self.yScale(0);
          })
          .interpolate("cardinal");

        var lineNewPosition = d3.svg.line()
          .x(function (d) {
            return self.xScale(d.x);
          })
          .y(function (d) {
            return self.yScale(d.y);
          })
          .interpolate("cardinal");

        var path = this.svg.append('path')
          .attr('d', line(el.position))
          .attr('stroke', el.color)
          .attr('stroke-width', el.stroke)
          .attr('fill', el.fill);

        var dot = this.svg.selectAll("dot")
          .data(el.position)
          .enter().append("circle")
          .attr('fill', el.dotFill)
          .attr("r", el.dotRadius)
          .attr('stroke', el.dotColor)
          .attr('stroke-width', el.dotStroke)
          .attr('visibility', function (d) {
            if (d.dotVisibility) {
              return d.dotVisibility;
            }
          })
          .attr("cx", function (d) {
            return self.xScale(d.x);
          })
          .attr("cy", function (d) {
            return self.yScale(0);
          });

        return {path: path, speed: el.speed, position: lineNewPosition(el.position), dot: dot};
      };

      LinearChart.prototype.animate = function (lines) {
        var self = this;
        var rect, offsetTop;
        var scrollPosition = document.body.scrollTop + document.documentElement.clientHeight;

        if (self.wrapper.classList.contains('animated')) return;

        rect = self.wrapper.getBoundingClientRect();
        offsetTop = rect.top + document.body.scrollTop;

        if (scrollPosition > offsetTop + self.wrapper.offsetHeight - 90) {
          self.wrapper.classList.add('animated');
          for (var i = 0; i < self.elmsLength; i++) {
            lines[i].path.transition().duration(lines[i].speed)
              .attr('d', lines[i].position);

            lines[i].dot.transition().duration(lines[i].speed)
              .attr("cx", function (d) {
                return self.xScale(d.x);
              })
              .attr("cy", function (d) {
                return self.yScale(d.y);
              });
          }
        }
      };

      function init(charts) {
        for (var i = 0; i < charts.length; i++) {
          new LinearChart(charts[i]);
        }
      }

      init(charts);
    }
  }

  function initPlay() {
    var btn = document.querySelector('.section-media .btn-play a');

    if (!btn) return;

    btn.addEventListener('click', videoControl);
    btn.addEventListener('touch', videoControl);

    function videoControl(e) {
      e.preventDefault();

      var video = document.getElementById(this.getAttribute('href').replace('#', ''));

      if (video.muted) {
        video.currentTime = 0;
        video.muted = false;
        video.loop = false;
        document.body.classList.add('video-played');

        video.addEventListener('ended', function () {
          video.muted = true;
          video.loop = true;
          document.body.classList.remove('video-played');
          video.play();
        });
      }
    }
  }

  function initElmsAnimation() {
    window.sr = ScrollReveal({
      duration: 1000,
      scale: 1,
      easing: 'ease',
      origin: 'top',
      mobile: false
    });

    sr.reveal('.section-media .bg', {
      origin: 'left',
      distance: '100px'
    });

    sr.reveal('.section-media .container', {
      origin: 'right',
      distance: '100px'
    });

    sr.reveal('.section-desc .container', {
      distance: '50px'
    });

    sr.reveal('.content-block.img-right .img img', {
      origin: 'bottom',
      distance: '50px'
    });

    sr.reveal('.content-block.img-right .text-inner', {
      distance: '50px'
    });

    sr.reveal('.content-wrapper .separator', {
      distance: '0'
    });

    sr.reveal('.content-block.img-left .img img', {
      origin: 'bottom',
      distance: '50px'
    });

    sr.reveal('.content-block.img-left .img .canvas-wrapper', {
      origin: 'bottom',
      distance: '50px'
    });

    sr.reveal('.content-block.img-left .text-inner', {
      distance: '50px'
    });

    sr.reveal('.content-block.style-a img', {
      distance: '0',
      scale: .9
    });

    sr.reveal('.cols.cols-3 .col h3', {
      distance: '0'
    });

    sr.reveal('.cols.cols-3 .col .col-body', {
      distance: '0',
      scale: .8
    });

    sr.reveal('.b-technologies .content-img li', {
      origin: 'bottom',
      distance: '40px'
    });

    var bTechnologies = document.querySelector('.b-technologies');

    if (bTechnologies && window.outerWidth > 767) {
      sr.reveal('.b-technologies .img', {
        origin: 'right',
        opacity: 1,
        distance: (window.outerWidth - bTechnologies.offsetWidth) / 2 + 450 + 'px',
        delay: 1000,
        easing: 'ease-out',
        beforeReveal: function (domEl) {
          domEl.classList.add('custom-animation');
        }
      });
    }
  }

})(jQuery);