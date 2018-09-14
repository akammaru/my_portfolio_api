import store from '@/store'

getLabel(key) {
    if(_.isUndefined(key)) {
        return ''
    }

    const labelsObject = store.state.translations.translations

    const splitKey = key.split('.')

    for (let search_key of splitKey) {
        if (search_key ==)
    }
}