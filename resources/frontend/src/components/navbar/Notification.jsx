import React, { useEffect } from 'react'
import Pusher from 'pusher-js'

const Notification = () => {
   

    return (
        <div>
            <div
                className='z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600'
                id='user-dropdown'
            >
                <div className='px-4 py-3'>
                    <span className='block text-sm text-gray-900 dark:text-white'>
                        Bonnie Green
                    </span>
                    <span className='block text-sm text-gray-500 truncate dark:text-gray-400'>
                        name@flowbite.com
                    </span>
                </div>
            </div>
        </div>
    )
}

export default Notification
