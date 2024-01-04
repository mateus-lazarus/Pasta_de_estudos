export default function WithParameters(props) {
    //console.log(props)

    const status = props.StudentGrade >= 7
        ? 'Approved'
        : 'Dismissed';

    return (
        <div>
            <h2>{props.title}</h2>
            <p>
                <strong>{props.StudentName} </strong>
                has achieved
                <strong> {props.StudentGrade} </strong>
                and is
                <strong> {status}</strong>
            </p>
        </div>
    );
}
