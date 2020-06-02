Area2: {
    required: function(element) {
    return (!$("#Area_Name2").hasClass('valid'));
    }
},
Area_Name2: {
    required: function(element) {
        return (!$("#Area2").hasClass('valid'));
    }
}