import PropType from 'prop-types'
const Notification = ({ message }) => {
    return (
        <div>
            <div
                className='z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600'
                id='user-dropdown'
            >
                <div className='px-4 py-3'>
                    <span className='block text-sm text-gray-900 dark:text-white'>
                        {message}
                    </span>
                </div>
            </div>
        </div>
    )
}

Notification.propTypes = {
    message: PropType.string.isRequired
}

export default Notification
