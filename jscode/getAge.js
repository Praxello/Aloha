const getAge = (birthDate) => {
    var years = moment().diff(birthDate, 'years', false);
    return years;
};