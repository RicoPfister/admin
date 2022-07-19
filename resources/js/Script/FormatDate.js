export default function formatDate(dateString, options) {
    const milliseconds = Date.parse(dateString)
    const dateObject = new Date(milliseconds)
    console.log(options)
    if(options==='t') options={dateStyle: 'short', timeStyle: 'short'}
    else options={dateStyle: 'short'}
    console.log(options)
    const humanDateFormat = dateObject.toLocaleString('de-CH', options)
    return humanDateFormat
}
