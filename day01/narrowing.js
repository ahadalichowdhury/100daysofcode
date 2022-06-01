function narrowing(input) {
    if (typeof input === "string") {
        console.log("this is the string");
    }
    else if (typeof input === "number") {
        console.log("this is the number");
    }
    else if (typeof input === "boolean") {
        console.log("this is the boolean");
    }
    else {
        console.log("this is an error");
    }
}
narrowing(true);
