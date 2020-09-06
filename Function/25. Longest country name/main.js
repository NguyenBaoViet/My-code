function Longest_country_name(name) {
    return name.reduce((lname, country) => {
        return lname.length > country.length ? lname : country;
    }, "");
}

console.log(Longest_country_name(["Australia", "Germany", "United States of America"]));