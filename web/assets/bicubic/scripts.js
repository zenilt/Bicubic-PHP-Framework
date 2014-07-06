var CLASS_LOADING = "loading";
var CLASS_WARNINGS = "warnings";
var DATA_LANGEMPTY = "data-langempty";
var DATA_LANGNOTEQUAL = "data-langnotequal";
var DATA_REQUIRED = "data-required";
var DATA_SELECTED = "data-selected";
var DATA_CHECKED = "data-checked";

var setInputInvalid = function(element, error) {
    element.setCustomValidity(error);
    element.classList.remove(CLASS_LOADING);
    element.classList.add(CLASS_WARNINGS);
};
var setInputValid = function(element) {
    element.setCustomValidity('');
    element.classList.remove(CLASS_LOADING);
    element.classList.remove(CLASS_WARNINGS);
};
var setInputLoading = function(element) {
    element.setCustomValidity(CLASS_LOADING);
    element.classList.remove(CLASS_WARNINGS);
    element.classList.add(CLASS_LOADING);
};
var checkEmpty = function() {
    if (this.value === '') {
        setInputInvalid(this, this.getAttribute(DATA_LANGEMPTY));
    } else {
        setInputValid(this);
    }
};
var checkEqual = function(self, element) {
    if (this.value === '' || self.value !== element.value) {
        setInputInvalid(self, self.getAttribute(DATA_LANGNOTEQUAL));
    } else {
        setInputValid(self);
    }
};
function getAllElementsWithAttribute(attribute)
{
    var matchingElements = [];
    var allElements = document.getElementsByTagName('*');
    for (var i = 0, n = allElements.length; i < n; i++)
    {
        if (allElements[i].getAttribute(attribute))
        {
            matchingElements.push(allElements[i]);
        }
    }
    return matchingElements;
}

//Common elements
document.addEventListener('DOMContentLoaded', function() {
    var datarequireds = getAllElementsWithAttribute(DATA_REQUIRED);
    for (var i = 0, n = datarequireds.length; i < n; i++) {
        if(datarequireds[i].getAttribute(DATA_REQUIRED) === "required") {
            datarequireds[i].required = true;
        }
    }
    var dataselecteds = getAllElementsWithAttribute(DATA_SELECTED);
    for (var i = 0, n = dataselecteds.length; i < n; i++) {
        if(dataselecteds[i].getAttribute(DATA_SELECTED) === "selected") {
            dataselecteds[i].selected = true;
        }
    }
    var datacheckeds = getAllElementsWithAttribute(DATA_CHECKED);
    for (var i = 0, n = datacheckeds.length; i < n; i++) {
        if(datacheckeds[i].getAttribute(DATA_CHECKED) === "checked") {
            datacheckeds[i].checked = true;
        }
    }
});