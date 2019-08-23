{
  "emmet.showAbbreviationSuggestions": true,
  "emmet.showExpandedAbbreviation": "always",
  "emmet.includeLanguages": {
    "vue-html": "html",
    "vue": "html",
    "javascript": "javascriptreact"
  },
  "explorer.confirmDelete": false,
  "editor.renderIndentGuides": false,
  "breadcrumbs.enabled": true,
  "window.zoomLevel": 0,
  "editor.suggestSelection": "first",
  "vsintellicode.modify.editor.suggestSelection": "automaticallyOverrodeDefaultValue",
  "git.enableSmartCommit": true,
  "workbench.iconTheme": "vscode-icons",
  "workbench.colorTheme": "One Dark Pro",
  //根据文件后缀名定义vue文件类型
  "files.associations": {
    "*.vue": "vue",
    "*.js": "javascript"
  },
  "eslint.options": {
    "plugins": ["html"]
  },
  "eslint.validate": [
    "javascript",
    "javascriptreact",
    "html",
    "vue",
    {
      "language": "html",
      "autoFix": true
    },
    {
      "language": "vue",
      "autoFix": true
    },
    {
      "language": "javascript",
      "autoFix": true
    }
  ],
  "eslint.autoFixOnSave": true,
  "editor.tabSize": 4,
  "vetur.format.defaultFormatter.html": "js-beautify-html",
  "vetur.format.defaultFormatterOptions": {
    "wrap_attributes": "force-aligned"
  }
}
