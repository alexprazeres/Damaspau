// constsPlugin.js
const Settings = {
    SiteURL: ""
  }

  let YourConsts = {}; // As suggested by the comments.

  YourConsts.install = function (Vue, options) {
    Vue.prototype.$getConst = (key) => {
      return Settings[key]
    }
  }

  export default YourConsts
