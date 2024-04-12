Math.lerp = function (value1, value2, amount) {
    amount = amount < 0 ? 0 : amount;
    amount = amount > 1 ? 1 : amount;
    let result = value1 + (value2 - value1) * amount;
    result = result.toFixed(2)
    return parseFloat(result);
};