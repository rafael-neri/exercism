package leap

import "math"

const testVersion = 3

func IsLeapYear(year int) bool {
	if math.Mod(float64(year), float64(4)) == 0 {
		if math.Mod(float64(year), float64(100)) == 0 {
			if math.Mod(float64(year), float64(400)) == 0 {
				return true
			}
			return false
		}
		return true
	}
	return false
}
