// submit_response.js

exports.handler = async (event) => {
    try {
        const { unsubscribe_reason } = JSON.parse(event.body);

        // Handle form submission (e.g., append response to a CSV file)

        return {
            statusCode: 200,
            body: JSON.stringify({ message: 'Response submitted successfully.' }),
        };
    } catch (error) {
        return {
            statusCode: 500,
            body: JSON.stringify({ error: 'Internal server error.' }),
        };
    }
};
