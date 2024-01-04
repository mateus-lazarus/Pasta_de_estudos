export default function LuckNumber(props) {

    const { numberMin, numberMax } = props;

    const luckDecimal = Math.random();
    const luckNumber = (luckDecimal * (numberMax - numberMin)) + numberMin;

    return (
        <div>
            <h2>Luck Number</h2>
            <p>
                Luck Minimum: {numberMin}
            </p>
            <p>
                Luck Maximum: {numberMax}
            </p>
            <p>
                Luck result: {luckNumber}
            </p>
        </div>
    );
}
