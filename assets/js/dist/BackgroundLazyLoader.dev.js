"use strict";

function BackgroundNode(_ref) {
  var e = _ref.node,
      a = _ref.loadedClassName;
  var o = e.getAttribute("data-background-image-url");
  return {
    node: e,
    load: function load(d) {
      var n = new Image();
      n.onload = function (d) {
        requestAnimationFrame(function () {
          e.style.backgroundImage = "url(".concat(o, ")"), e.classList.add(a), d();
        });
      }(d), n.src = o;
    }
  };
}

var defaultOptions = {
  selector: "[data-background-image-url]",
  loadedClassName: "loaded"
};

function BackgroundLazyLoader() {
  var _ref2 = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : defaultOptions,
      e = _ref2.selector,
      a = _ref2.loadedClassName;

  var o = [].slice.apply(document.querySelectorAll(e)).map(function (e) {
    return new BackgroundNode({
      node: e,
      loadedClassName: a
    });
  }),
      d = new IntersectionObserver(function (e, a) {
    e.forEach(function (_ref3) {
      var e = _ref3.target,
          d = _ref3.isIntersecting;
      if (!d) return;
      var n = o.find(function (a) {
        return a.node.isSameNode(e);
      });
      n && n.load(function () {
        a.unobserve(e), o = o.filter(function (a) {
          return !a.node.isSameNode(e);
        }), o.length || a.disconnect();
      });
    });
  });
  o.forEach(function (e) {
    return d.observe(e.node);
  });
}

BackgroundLazyLoader();