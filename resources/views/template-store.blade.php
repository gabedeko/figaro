{{--
  Template Name: Store Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <?php /*@include('partials.content-page')*/ ?>

<div class="figaro-hero" style="background-image:url(@asset('images/placeholder/figaro_placeholder_21.jpg'))">
    <div class="figaro-hero-container">
        <h1 class="display-4 figaro-hero-title">Products</h1>
        <hr class="my-3">
        <p class="lead figaro-hero-copy">Having The Right Beauty Tools Is Essential</p>
    </div>
</div>


<div id='collection-component-1593699461438'></div>
<script type="text/javascript">
/*<![CDATA[*/
(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }
  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }
  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'figaro-face.myshopify.com',
      storefrontAccessToken: 'f449b0449ca1414949a926b2fe147fb5',
    });
    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('collection', {
        id: '165856378958',
        node: document.getElementById('collection-component-1593699461438'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "calc(25% - 20px)",
          "margin-left": "20px",
          "margin-bottom": "50px",
          "width": "calc(25% - 20px)"
        },
        "img": {
          "height": "calc(100% - 15px)",
          "position": "absolute",
          "left": "0",
          "right": "0",
          "top": "0"
        },
        "imgWrapper": {
          "padding-top": "calc(75% + 15px)",
          "position": "relative",
          "height": "0"
        }
      },
      "title": {
        "font-family": "Avant Garde, sans-serif",
        "font-weight": "normal",
        "font-size": "16px"
      },
      "button": {
        ":hover": {
          "background-color": "#d4b98d"
        },
        "background-color": "#ebcd9d",
        ":focus": {
          "background-color": "#d4b98d"
        },
        "border-radius": "0px"
      }
    },
    "text": {
      "button": "Add to cart"
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "button": false,
      "buttonWithQuantity": true
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        ":hover": {
          "background-color": "#ebcd9d",
          "color": "#493548"
        },
        "background-color": "#ebcd9d",
        ":focus": {
          "background-color": "#ebcd9d"
        },
        "border-radius": "0px"
      }
    },
    "text": {
      "button": "Add to cart"
    }
  },
  "cart": {
    "styles": {
      "button": {
        ":hover": {
          "background-color": "#ebcd9d",
          "color": "#493548"
        },
        "background-color": "#ebcd9d",
        ":focus": {
          "background-color": "#ebcd9d"
        },
        "border-radius": "0px"
      }
    },
    "text": {
      "total": "Subtotal",
      "button": "Checkout"
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#ebcd9d",
        ":hover": {
          "background-color": "#ebcd9d",
          "color": "#493548"
        },
        ":focus": {
          "background-color": "#ebcd9d"
        }
      }
    }
  }
},
      });
    });
  }
})();
/*]]>*/
</script>

  @endwhile
@endsection
