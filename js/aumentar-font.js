(function () {
    var Font = {
        storage: 'fontState',
        cssClass: 'aumentar-fonte',
        currentState: null,
        check: checkFont,
        getState: getFontState,
        setState: setFontState,
        toogle: toogleFont,
        updateFont: updateFontSize
    };

    window.toggleFont = function () { Font.toogle(); };

    Font.check();

    function checkFont() {
        this.updateFont();
    }

    function getFontState() {
        return localStorage.getItem(this.storage) === 'true';
    }

    function setFontState(state) {
        localStorage.setItem(this.storage, '' + state);
        this.currentState = state;
        this.updateFont();
    }

    function updateFontSize() {
        var body = document.body;

        if (this.currentState === null)
            this.currentState = this.getState();

        if (this.currentState)
            body.classList.add(this.cssClass);
        else
            body.classList.remove(this.cssClass);
    }

    function toogleFont() {
        this.setState(!this.currentState);
    }
})();